<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

use App\Page;
use App\Menu;
use App\Article;
use App\Image;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('id','desc')->paginate(10);
        return view('admin.pages.pages_reports')->with('pages',$pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::select('id','title')->where('status',1)->get();
        $pages = Page::select('id','title')->where('status',1)->get();
        return view('admin.pages.new_page')->with('menus',$menus)->with('pages',$pages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $page_id = uniqid();
        $find = array(' ','.',')','(',',','@','"',':',';','*','%','$','#','!','&');
        $link = strtolower(str_replace($find,'-',$request->page));

        $photoName = $link .  '-' . $page_id .'.'.$request->page_image->getClientOriginalExtension();
        $request->page_image->move(public_path('pages-images'), $photoName);
        
        $page = new Page();
        $page->title = $request->page;
        $page->sub_title = $request->sub_title;
        $page->page_link = $link;
        $page->user_id = Auth::user()->id;
        $page->menu_id = $request->main_menu;
        $page->status = 1;

        $page->save();

        $image = new Image();
        $image->image_type = 'page';
        $image->article_id = Page::select('id')->latest('id')->first()->id;
        $image->image = $photoName;
        $image->status = 1;
        $image->save();

        $request->session()->flash('success',$request->page . ' Page has been created');

        return redirect()->route('admin.pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Page::find($id);
        return view('admin.pages.page_details')->with('page',$page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $page = Page::find($id);
        return view('admin.pages.edit_page')->with('page',$page);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $article_id = uniqid();
        $find = array(' ','.',')','(',',','@','"',':',';','*','%','$','#','!','&');
        $link = strtolower(str_replace($find,'-',$request->page_title));

        $page = Page::find($id);
        $page->title = $request->page_title;
        $page->sub_title = $request->sub_title;
        $page->menu_id = $request->main_menu;
        $page->page_link = $link;

        //check if image is empty
        if(empty($request->page_image)){

        }else{

            $photoName = $link .  '-' . $article_id .'.'.$request->page_image->getClientOriginalExtension();
            $request->page_image->move(public_path('pages-images'), $photoName);

            $image_id = Image::select('id')->where('image_type','page')->where('article_id',$id)->first();

            if($image_id){
                $image = Image::find($image_id->id);
                $image->image_type = 'page';
                $image->article_id = $id;
                $image->image = $photoName;
                $image->status = 1;
                $image->save();
            }else{
                $image = new Image();
                $image->image_type = 'page';
                $image->article_id = $id;
                $image->image = $photoName;
                $image->status = 1;
                $image->save();
            }
            

        }

        if($page->save()){
            $request->session()->flash('success',$request->page_title . ' Page has been updated');

        }else{
            $request->session()->flash('error','There was an error in updating the page');

        }

        
        return redirect()->route('admin.pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $page = Page::where('id',$id)->first();

        
        $page->status = $request->page_status;

        
        if($page->save()){

            $request->session()->flash('success',$page->title . ' Page has been updated');

        }else{
            $request->session()->flash('error','There was an error in updating the page');

        }

        
        return redirect()->route('admin.pages.index');

    }

    public function order_up(Request $request){

        $article_res = Article::select('article_order','title')
        ->where('page_id',$request->page_id)
        ->where('id',$request->article_id)->first();

        if($article_res->article_order > 1){

            $new_order = $article_res->article_order - 1;

            $article_to_move_down = Article::select('id')
            ->where('article_order',$new_order)
            ->where('page_id',$request->page_id)->first();

            $article_moving_up = Article::find($request->article_id);
            $article_moving_up->article_order = $new_order;
            $article_moving_up->save();

            $article_moving_down = Article::find($article_to_move_down->id);
            $article_moving_down->article_order = $article_res->article_order;
            $article_moving_down->save();

            $request->session()->flash('success',$article_res->title . ' article order has been moved up');

        }else{
            $request->session()->flash('error',$article_res->title . ' article cannot move higher');

        }


        return redirect()->route('admin.pages.show',$request->page_id);


    }

    public function order_down(Request $request){

        $largest_order = Article::select('article_order','title')
        ->where('page_id',$request->page_id)
        ->where('id',$request->article_id)->max('article_order');

        $article_res = Article::select('article_order','title')
        ->where('page_id',$request->page_id)
        ->where('id',$request->article_id)->first();

        if($article_res->article_order >= $largest_order){

            $new_order = $article_res->article_order + 1;

            $article_to_move_up = Article::select('id')
            ->where('article_order',$new_order)
            ->where('page_id',$request->page_id)->first();

            $article_moving_down = Article::find($request->article_id);
            $article_moving_down->article_order = $new_order;
            $article_moving_down->save();

            $article_moving_up = Article::find($article_to_move_up->id);
            $article_moving_up->article_order = $article_res->article_order;
            $article_moving_up->save();

            $request->session()->flash('success',$article_res->title . ' article order has been moved down');


        }else{

            $request->session()->flash('error',$article_res->title . ' article cannot move lower');
        }
        
        return redirect()->route('admin.pages.show',$request->page_id);
        
    }

}

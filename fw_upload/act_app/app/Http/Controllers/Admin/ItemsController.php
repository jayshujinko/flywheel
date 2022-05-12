<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

use App\Page;
use App\Menu;
use App\Article;
use App\Image;
use App\Item;
use App\Category;


class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderBy('id','desc')->paginate(10);
        return view('admin.items.items_report')->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        $pages = Page::select('id','title')->where('status',1)->where('status',3)->get();
        $articles = Article::select('id','title')->where('status',1)->get();
        $categories = Category::select('id','title')->where('status',1)->get();
        return view('admin.items.new_item')
        ->with('categories',$categories)
        ->with('menus',$menus)
        ->with('articles',$articles)
        ->with('pages',$pages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $item_id = uniqid();
            $find = array(' ','.',')','(',',','@','"',':',';','*','%','$','#','!','&');
            $link = strtolower(str_replace($find,'-',$request->title));

            if(Item::select('id')->where('link',$link)->count() == 0){

                $item = new Item();

                $item_type = explode('-', $request->main_page);
        
                $item->title = $request->title;
                $item->content = $request->content;
                $item->page_id = $item_type[0];
                $item->category_id = $request->category;
                $item->link = $link;
                $item->user_id = Auth::user()->id;
                $item->link_id = $item_id;
                $item->article_type = $item_type[1];
                $item->status = 1;

                $largest_order = Item::select('item_order','title')
                ->where('page_id',$request->main_page)->max('item_order');
                $item->item_order = $largest_order + 1;
        
                $item->save();

                if(empty($request->item_image)){


                }else{

                    $photoName = $link .  '-' . $item_id .'.'.$request->item_image->getClientOriginalExtension();
                    $request->item_image->move('article-images', $photoName);
                    
                    $image = new Image();
                    $image->image_type = 'item';
                    $image->article_id = Item::select('id')->latest('id')->first()->id;
                    $image->image = $photoName;
                    $image->status = 1;
                    $image->save();

                }

                
        
                

                
        
                

                $request->session()->flash('success','Item with the title " ' . $request->title . ' " created');

            }else{
                $request->session()->flash('error','Item with the title " ' . $request->title . ' " title exists');
            }

        return redirect()->route('admin.items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        return view('admin.items.item_details')->with('item',$item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menus = Menu::all();
        $articles = Article::select('id','title')->where('status',1)->get();
        $pages = Page::select('id','title')->where('status',1)->where('status',3)->get();
        $categories = Category::select('id','title')->where('status',1)->get();
        $item = Item::where('id',$id)->first();
        return view('admin.items.edit_item')
        ->with('categories',$categories)
        ->with('menus',$menus)
        ->with('pages',$pages)
        ->with('articles',$articles)
        ->with('item',$item);

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
        
        $find = array(' ','.',')','(',',','@','"',':',';','*','%','$','#','!','&');
        $link = strtolower(str_replace($find,'-',$request->title));

            $item = Item::find($id);

            $type = explode('-',$request->main_page);
    
            $item->title = $request->title;
            $item->content = $request->content;
            $item->page_id = $type[0];
            $item->category_id = $request->category;
            $item->link = $link;
            $item->user_id = Auth::user()->id;
            $item->article_type = $type[1];
            $item->status = 1;

            $item_id = $item->link_id;
    
            $item->save();

            //check if image is empty
            if(empty($request->item_image)){


            }else{

                $photoName = $link .  '-' . $item_id .'.'.$request->item_image->getClientOriginalExtension();
                $request->item_image->move('article-images', $photoName);
        
                $image_id = Image::select('id')->where('image_type','item')->where('article_id',$id)->first();
                
                if($image_id){

                    $image = Image::find($image_id->id);
                    $image->image_type = 'item';
                    $image->article_id = $id;
                    $image->image = $photoName;
                    $image->status = 1;
                    $image->save();
    
                }else{
    
                    $image = new Image();
                    $image->image_type = 'item';
                    $image->article_id = $id;
                    $image->image = $photoName;
                    $image->status = 1;
                    $image->save();
    
                }

            }
    
            

            $request->session()->flash('success','Item with the title " ' . $request->title . ' " created');

        
            return redirect()->route('admin.items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $item = Item::where('id',$id)->first();

        
        $item->status = $request->page_status;

        
        if($item->save()){

            $request->session()->flash('success',$item->title . ' Page has been updated');

        }else{
            
            $request->session()->flash('error','There was an error in updating the page');

        }

        
        return redirect()->route('admin.items.index');
    }
}

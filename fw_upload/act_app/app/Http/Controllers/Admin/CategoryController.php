<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

use App\Page;
use App\Menu;
use App\Article;
use App\Image;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','desc')->paginate(10);
        return view('admin.categories.categories_reports')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        $pages = Page::select('id','title')->where('status',1)->get();
        return view('admin.categories.new_category')->with('menus',$menus)->with('pages',$pages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $find = array(' ','.',')','(',',','@','"',':',';','*','%','$','#','!','&');
        $link = strtolower(str_replace($find,'-',$request->title));

        $category = new Category();
        $category->title = $request->title;
        $category->link = $link;
        $category->status = 1;

        if(Category::select('id')->where('link',$link)->count() ==0){
            if($category->save()){

                $request->session()->flash('success','Category with the title " ' . $request->title . ' " created');
            }else{
                $request->session()->flash('error','Error in saving category ' . $request->title);
    
            }

        }else{
            $request->session()->flash('error',$request->title . ' Category exists' );
        }
        
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $pages = Page::select('id','title')->where('status',1)->get();
        $category = Category::where('id',$id)->first();
        return view('admin.categories.edit_category')->with('menus',$menus)->with('category',$category)
        ->with('pages',$pages);
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

        

            $category = Category::find($id);
            $category->title = $request->title;
            $category->link = $link;
            

            
            if($category->save()){

                $request->session()->flash('success','Category with the title " ' . $request->title . ' " Updated');
            }else{
                $request->session()->flash('error','Error in saving category ' . $request->title);
    
            }
    
            


        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {

        $category = Category::where('id',$id)->first();
        
        if($category->status == 1){

            $category->status = 0;

        }else{

            $category->status = 1;

        }

        if($category->save()){

            $request->session()->flash('success',$category->title . ' Category has been updated');

        }else{
            $request->session()->flash('error','There was an error in updating the category');

        }

        
        return redirect()->route('admin.category.index');

    }
}

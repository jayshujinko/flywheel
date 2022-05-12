<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

use App\Page;
use App\Menu;
use App\Article;
use App\Image;

class NoImageArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return view('admin.articles.new_no_image_article')->with('menus',$menus)->with('pages',$pages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
            $article_id = uniqid();
            $link = strtolower(str_replace(' ','-',$request->title));

            if(Article::select('id')->where('link',$link)->count() == 0){

        
                $article = new Article();
        
                $article->title = $request->title;
                $article->content = $request->content;
                $article->second_content = $request->second_content;
                $article->page_id = $request->main_page;
                $article->home_page = ($request->home_page) ? 1 : 0;
                $article->slider = ($request->slider) ? 1 : 0;
                $article->link = $link;
                $article->user_id = Auth::user()->id;
                $article->link_id = $article_id;
                $article->article_type = "no_image";
                $article->status = 1;

                $largest_order = Article::select('article_order','title')
                ->where('page_id',$request->main_page)->max('article_order');
                $article->article_order = $largest_order + 1;
        
                $article->save();
        
                $request->session()->flash('success','Article with the title " ' . $request->title . ' " created');

            }else{
                $request->session()->flash('error','Article with the title " ' . $request->title . ' " title exists');
            }

        //return redirect()->route('admin.articles.index');

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
        $pages = Page::where('status',1)->get();
        $article = Article::find($id);
        return view('admin.articles.edit_no_image_article')->with('article',$article)->with('pages',$pages);
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
            $link = strtolower(str_replace(' ','-',$request->title));

                $article = Article::find($id);

                $article->title = $request->title;
                $article->content = $request->content;
                $article->second_content = $request->second_content;
                $article->page_id = $request->main_page;
                $article->home_page = ($request->home_page) ? 1 : 0;
                $article->slider = ($request->slider) ? 1 : 0;
                $article->image_left = ($request->image_left) ? 1 : 0;
                $article->image_right = ($request->image_right) ? 1 : 0;
                $article->link = $link;
                $article->user_id = Auth::user()->id;
                $article->article_type = "no_image";
                $article->status = 1;
        
                $article->save();
        
                $request->session()->flash('success','Article with the title " ' . $request->title . ' " updated');

            

        //return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

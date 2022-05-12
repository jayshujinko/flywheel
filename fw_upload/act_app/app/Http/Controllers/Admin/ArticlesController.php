<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

use App\Page;
use App\Menu;
use App\Article;
use App\Image;

class ArticlesController extends Controller
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
        $articles = Article::orderBy('id','desc')->paginate(10);
        return view('admin.articles.articles_reports')->with('articles',$articles);
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
        return view('admin.articles.new_article')->with('menus',$menus)->with('pages',$pages);
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
            $find = array(' ','.',')','(',',','@','"',':',';','*','%','$','#','!','&');
            $link = strtolower(str_replace($find,'-',$request->title));

            if(Article::select('id')->where('link',$link)->count() == 0){

                $photoName = $link .  '-' . $article_id .'.'.$request->article_image->getClientOriginalExtension();
                $request->article_image->move('article-images', $photoName);
        
                $article = new Article();
        
                $article->title = $request->title;
                $article->sub_title = $request->sub_title;
                $article->content = $request->content;
                $article->page_id = $request->main_page;
                $article->home_page = ($request->home_page) ? 1 : 0;
                $article->slider = ($request->slider) ? 1 : 0;
                $article->link = $link;
                $article->user_id = Auth::user()->id;
                $article->link_id = $article_id;
                $article->status = 1;

                $largest_order = Article::select('article_order','title')
                ->where('page_id',$request->main_page)->max('article_order');
                $article->article_order = $largest_order + 1;
        
                $article->save();
        
                $image = new Image();
                $image->image_type = 'article';
                $image->article_id = Article::select('id')->latest('id')->first()->id;
                $image->image = $photoName;
                $image->status = 1;
                $image->save();

                $request->session()->flash('success','Page with the title " ' . $request->title . ' " created');

            }else{
                $request->session()->flash('error','Page with the title " ' . $request->title . ' " title exists');
            }

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
        $article = Article::find($id);
        return view('admin.articles.article_details')->with('article',$article);
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
        $menus = Menu::where('status',1)->orWhere('status',3)->get();

       
        $article = Article::find($id);
        return view('admin.articles.edit_articles')
        ->with('article',$article)
        ->with('menus',$menus)
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

        //dd($request);
        $find = array(' ','.',')','(',',','@','"',':',';','*','%','$','#','!','&');
        $link = strtolower(str_replace($find,'-',$request->title));

        $article = Article::find($id);
        $article->title = $request->title;
        $article->sub_title = $request->sub_title;
        $article->content = $request->content;
        $article->page_id = $request->main_page;
        $article->link = $link;
        $article->user_id = Auth::user()->id;
        //$article->link_id = $article_id;
        $article->home_page = ($request->home_page) ? 1 : 0;
        $article->slider = ($request->slider) ? 1 : 0;
        $article->status = 1;
        $article->save();

        $article_id = $article->link_id;

        //check if image is empty
        if(empty($request->article_image)){

        }else{

            $photoName = $link .  '-' . $article_id .'.'.$request->article_image->getClientOriginalExtension();
            $request->article_image->move('article-images', $photoName);

            $image_id = Image::select('id')->where('image_type','article')->where('article_id',$id)->first();

            if($image_id){

                $image = Image::find($image_id->id);
                $image->image_type = 'article';
                $image->article_id = $id;
                $image->image = $photoName;
                $image->status = 1;
                $image->save();

            }else{

                $image = new Image();
                $image->image_type = 'article';
                $image->article_id = $id;
                $image->image = $photoName;
                $image->status = 1;
                $image->save();

            }
          
        }

        $request->session()->flash('success',$request->title . ' Article has been updated');

        
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

        
        $article = Article::where('id',$id)->first();
        
        if($article->status == 1){

            $article->status = 0;

        }else{

            $article->status = 1;

        }

        if($article->save()){

            $request->session()->flash('success',$article->title . ' Article has been updated');

        }else{
            $request->session()->flash('error','There was an error in updating the article');

        }

        
        return redirect()->route('admin.pages.index');
    }

    public function search_articles(Request $request)
    {

        $articles = Article::where('title', 'like', '%' . $request->search_title . '%')->paginate(10);
        
        if($articles->count() ==0){

            $request->session()->flash('error','No Search results for ' . $request->search_title );
        
        }else{

            $request->session()->flash('success','Search results for ' . $request->search_title);

        }

        return view('admin.articles.articles_reports')->with('articles',$articles);

    }   
}

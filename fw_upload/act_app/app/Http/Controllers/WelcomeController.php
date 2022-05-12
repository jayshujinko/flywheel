<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Page;
use App\Article;
use App\Item;
use App\Category;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $menu = Menu::where('menu_link','home')->first();

        if($menu){
            $slider = Article::where('page_id',$menu->id)->get();

        }else{
            $slider = [];
        }

        $page ='who-we-are';

        if(Article::select('id')->where('link',$page)->get()){
            if(Article::select('id')->where('link',$page)->first()){
                $article = Article::select('id')->where('link',$page)->first()->id;
                if(Item::where('page_id',$article)->where('article_type','sub_item')->count() > 0){
                    $team = Item::where('page_id',$article)->where('article_type','sub_item')->get();
                }else{
                    $team = [];
                }
                
            }else{
                $team = [];
            }
            
        }else{
            $team = [];
        }
   
        return view('public/header')->with('current_menu','home')
        .view('public/index')->with('sliders',$slider)->with('teams',$team)
        .view('public/footer');
    }

    public function pages($menu,$page){

        $check_menu_link = Menu::select('id','title')->where('menu_link',$menu)->first();

      
        if($check_menu_link){

            $check_page_link = Article::select('id','title')->where('link',$page)->first();

            
            //get insights page with blogs by category
            if($check_menu_link->id == 3){
                    
                $category = Category::where('link',$page)->where('status',1)->first();

                if($category){

                    $items = Item::where('page_id',3)->where('category_id',$category->id)->where('status',1)->paginate(4);
                    return view('public/header')->with('page_id',$check_menu_link->id)->with('current_menu','insights')
                    .view('public/blog')->with('items',$items)->with('page_id',$check_menu_link->id).view('public/footer');
    
                }else{
                    //blog item read more
                    
                    $blog_item = Item::where('link',$page)->where('status',1)->first();
                    if($blog_item){
                        return view('public/header')->with('page_id',$check_menu_link->id)->with('current_menu','insights')
                    .view('public/single')->with('blog_item',$blog_item)->with('page_id',$check_menu_link->id).view('public/footer');
                
                    }else{
                        //blog item does not exist
                        abort(404);
                    }
                    
                }
                
            }else{

                if($check_page_link){


                    switch($menu){
                        case $check_menu_link->id == 1:
                            //your industry
                            return view('public/header')->with('page_id',$check_page_link->id)->with('current_menu',$menu)
                            .view('public/services')->with('current_page',$check_page_link->title)
                            ->with('page_id',$check_page_link->id)
                            ->with('menu_id',$check_menu_link->id)
                            ->with('pass_menu',$menu)
                            ->with('pass_page',$page)
                            .view('public/footer');
                        break;
                        case $check_menu_link->id == 2:
                            //solutions
                             return view('public/header')->with('page_id',$check_page_link->id)->with('current_menu',$menu)
                             .view('public/services')->with('current_page',$check_page_link->title)
                             ->with('page_id',$check_page_link->id)
                             ->with('menu_id',$check_menu_link->id)
                             .view('public/footer');
                        break;
                        case $check_menu_link->id == 3:
                            //was to get insights - check above
    
                        break;
                        case $check_menu_link->id == 4:

                       
                            //about us
                            if($page =='who-we-are' || $page =='our-team' ){
                                
                                if(Article::select('id')->where('link',$page)->get()){
                                    if(Article::select('id')->where('link',$page)->first()){
                                        $article = Article::select('id')->where('link',$page)->first()->id;
                                        if(Item::where('page_id',$article)->where('article_type','sub_item')->count() > 0){
                                            $team = Item::where('page_id',$article)->where('article_type','sub_item')->get();
                                            
                                        }else{
                                            $team = [];
                                        }

                                    }else{
                                        $team = [];
                                    }
                                    
                                }else{
                                    $team = [];
                                }

                                

                            }else{
                                $team = [];
                            }

                    
                            
                            return view('public/header')->with('page_id',$check_page_link->id)->with('current_menu',$menu)
                            .view('public/about')
                            ->with('page_id',$check_page_link->id)
                            ->with('menu_id',$check_menu_link->id)
                            ->with('current_page',$check_page_link->title)
                            ->with('pass_menu',$menu)
                            ->with('pass_page',$page)
                            ->with('teams',$team)
                            .view('public/footer');
                            
                            
                        break;
                        case $check_menu_link->id == 5:
                            //contact us
                            // return view('public/header')->with('current_menu',$menu)
                            // .view('public/updates')->with('current_page',$check_page_link->title)
                            // .view('public/footer');
                            
                        break;
                        default:
                            return view('public/header')->with('page_id',$check_page_link->id)->with('current_menu',$menu)
                            .view('public/index')->with('current_page',$check_page_link->title)
                            .view('public/footer');
                    }
    
                }else{
                    //page does not exist
                    abort(404);
                }
            }

            
        }else{
            //menu item does not exist
            abort(404);
        }  
        
    }

    public function page($page){

        $check_menu_link = Menu::select('id','title')->where('menu_link',$page)->first();

        if($check_menu_link){

            if($check_menu_link->id == 5){
                //insights
                $items = Item::where('page_id',5)->where('article_type','item')->where('status',1)->orderBy('id','desc')->paginate(4);

                return view('public/header')->with('current_menu','insights')
                .view('public/blog')->with('items',$items)->with('page_id',$check_menu_link->id).view('public/footer');
            
            }

            if($check_menu_link->id == 7){
                //contact us
                return view('public/header')->with('current_menu','contact-us')
                .view('public/contact_us')->with('page_id',$check_menu_link->id)->with('current_page','contact-us').view('public/footer');
            
            }

        }else{
            //menu item does not exist
            abort(404);
        }
        
    }

    public function pagex($menu,$page,$item){

        $check_menu_link = Menu::select('id','title')->where('menu_link',$menu)->first();

      
        if($check_menu_link){

            $check_page_link = Article::select('id','title')->where('link',$page)->first();


            if($check_page_link){

                //team member
                return view('public/header')->with('page_id',$check_page_link->id)->with('current_menu',$menu)
                .view('public/team_member')
                ->with('page_id',$check_page_link->id)
                ->with('menu_id',$check_menu_link->id)
                ->with('current_page',$check_page_link->title)
                ->with('pass_menu',$menu)
                ->with('item',$item)
                ->with('pass_page',$page)
                .view('public/footer');

            }else{
                //menu item does not exist
                abort(404); 
            }

        }else{
             //menu item does not exist
            abort(404);
        }

    }

    public function insights_category($category){
            return $category;
    }

}

@inject('images', 'App\Image') 
@inject('categories', 'App\Category') 
@inject('items_bundle', 'App\Item') 
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="background-image: url('{{ URL::to('/') }}/article-images/{{$images::where('article_id',$page_id)->where('image_type','article')->first()->image}}');height:60vh;background-size: cover; background-position: center center;">
      
      <div class="container">
        <div class="carousel-caption">
          <h1 style="color:white" class="lora-font">Blog</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
         
        </div>
      </div>
    </div>

    
    <div class="mb-5">
      <div class="container">


        <div class="row">

          <div class="col-lg-8">
            
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12" style="background-image: url('{{ URL::to('/') }}/article-images/{{$images::where('article_id',$blog_item->id)->where('image_type','item')->where('image_type','item')->first()->image}}');height:60vh;background-size: cover; background-position: center center;">

                            </div>
                            <div class="col-lg-2 blog-categorize pt-1 text-center" >
                                    @if($categories::where('id',$blog_item->category_id)->first())
                                     <p>{{$categories::where('id',$blog_item->category_id)->first()->title}}</p>
                                    @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="pl-3 pt-3 lora-font" >{{$blog_item->title}}</h3>
                                  <div style="word-wrap: break-word;">
                                  {!! $blog_item->content !!}
                                  </div>
                                  
                            </div>
                            <div class="col-lg-12 mt-3" style="border-top:1px solid #dee2e6;border-bottom:1px solid #dee2e6;">
                                <div class="row">
                                       
                                        <div class="col-lg-4 d-flex align-items-center">
                                            <div class="blog-social-media"></div>
                                            <div class="blog-social-media"></div>
                                            <div class="blog-social-media"></div>
                                            <div class="blog-social-media"></div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                


                <div class="row mt-5" style="border:1px solid #dee2e6;">
                  @php($blogs = $items_bundle::where('page_id',3)->where('article_type','item')->where('status',1)->orderBy('id','desc')->get())
                  @php($blog_arr = [])
                  @foreach($blogs as $q=>$blog)
                    @php($blog_arr[$q] = $blog->id)
                  @endforeach

                    @php($key = array_search($blog_item->id, $blog_arr))
                    @php($array_count = count($blog_arr))
                   
                    @if($key == 0 && $key < ($array_count - 1)) 

                          <div class="col-lg-6" style="word-wrap: break-word;">
                            @php($next_blog_id = $blog_arr[$key + 1])
                            @php($next_blog = $items_bundle::where('id',$next_blog_id)->where('article_type','item')->where('status',1)->orderBy('id','desc')->first())

                            <a class="pt-3" href="{{route('pages',['insights',$next_blog->link])}}">{{$next_blog->title}}</a>
                            <p>
                              {!! substr($next_blog->content,0,150) !!}
                            </p>
                          </div>

                    @elseif($key != 0 && $key < ($array_count - 1))

                        <div class="col-lg-6" style="word-wrap: break-word;">
                            @php($next_blog_id = $blog_arr[$key + 1])
                            @php($next_blog = $items_bundle::where('id',$next_blog_id)->where('article_type','item')->where('status',1)->orderBy('id','desc')->first())

                            <a class="pt-3" href="{{route('pages',['insights',$next_blog->link])}}">{{$next_blog->title}}</a>
                            <p>
                              {!! substr($next_blog->content,0,150) !!}
                            </p>
                          </div>

                      <div class="col-lg-6" style="border-right:1px solid #dee2e6;word-wrap: break-word;">
                          @php($prev_blog_id = $blog_arr[$key - 1])
                          @php($prev_blog = $items_bundle::where('id',$prev_blog_id)->where('article_type','item')->where('status',1)->orderBy('id','desc')->first())

                          <a class="pt-3" href="{{route('pages',['insights',$prev_blog->link])}}">{{$prev_blog->title}}</a>
                          <p>
                          {!! substr($prev_blog->content,0,150) !!}
                          </p>
                      </div>

                          

                      @elseif($key != 0 && $key == ($array_count - 1))

                        <div class="col-lg-6" style="border-right:1px solid #dee2e6;word-wrap: break-word;">
                            @php($prev_blog_id = $blog_arr[$key - 1])
                            @php($prev_blog = $items_bundle::where('id',$prev_blog_id)->where('article_type','item')->where('status',1)->orderBy('id','desc')->first())

                            <a class="pt-3" href="{{route('pages',['insights',$prev_blog->link])}}">{{$prev_blog->title}}</a>
                            <p>
                            {!! substr($prev_blog->content,0,150) !!}
                            </p>
                        </div>


                    @endif

                   


                    

                </div>

                
               


                <div class="row mt-5 pl-3 pr-3" style="border:1px solid #dee2e6;" >

                    <div class="col-lg-12" >
                        <div class="row">
                          <div class="col-12">
                            <h3 class="mb-5 ml-1 mt-1">Add your comment</h3>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-12">
                            <form>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Comments</label>
                                <textarea class="form-control" placeholder="Write a Comment..." id="exampleFormControlTextarea1" rows="9"></textarea>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Website</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Website">
                                
                              </div>

                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Name</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Name">
                                  
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                  </div>
                                </div>
                              </div>

                              
                            
                              <button type="submit" class="btn btn-primary mb-3">Post Comment</button>
                            </form>
      
                          </div>
                        </div>


                    </div>

                    <!-- <textarea  class="col-lg-12 m-1" style="height:300px"></textarea>
                    <label class="col-lg-12 mt-1 ml-1">Website</label>
                    <input class="col-lg-12 ml-1" type="text" />
                    <div class="row">
                        <div class="row">
                            <div class=""
                        </div>
                        
                        <input class="col-lg-6 ml-1" type="text" />
                    </div>
                     -->
                </div>
    
            
    
          </div>

          <div class="col-lg-4">

            <div class="row p-5">
                <div class="col-lg-12">
                    <b class="lora-font font-weight-bold">Search</b>
                    <form action="#" method="post" class="form-subscribe">
                        <div class="input-group mb-3">
                          <input type="text" style="background-color: #f8f8f8;" class="form-control" placeholder="Search post...." aria-label="Enter Email" aria-describedby="button-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row pb-5 pl-5 pr-5 pt-1">
              <div class="col-lg-12">
                <b class="lora-font font-weight-bold" >Categories</b>

                @foreach($categories::where('status',1)->get() as $category)
                        <div class="row pl-2 pt-1 side-menu">
                            <div class="col-sm-12 d-flex align-items-lg-center justify-content-between" >
                                <p><a href="{{route('pages',['insights',$category->link])}}">
                                    {{$category->title}}
                                </a></p>
                                <p><a href="#">
                                    ({{$items_bundle::where('category_id',$category->id)->count()}})
                                </a></p>
                            </div>
                        </div>
                    @endforeach

              </div>
            </div>

            <div class="row p-5">

                <b class="lora-font font-weight-bold">Recent Posts</b>

                <div class="col-lg-12 pl-2 pt-1" >

                    @php($items = $items_bundle::where('page_id',3)->where('article_type','item')->where('status',1)->limit(3)->orderBy('id','desc')->get())
                   @foreach($items as $item)
                        
                        <div class="row mb-3 second-side-menu">
                                
                                    <div class="col-lg-4 mt-1 mb-1" 
                                        style="background-image: url('{{ URL::to('/') }}/article-images/{{$images::where('image_type','item')->where('article_id',$item->id)->first()->image}}');
                                        height:100px;width:100px;border-radius: 50%;background-size: cover; background-position: center center;">
                                    
                                    </div>
    
                                <a href="{{route('pages',['insights',$item->link])}}" class="col-lg-8">
                                    <div class="col-lg-12">
                                        <p>{{$item->title}}</p>
                                        <p>{{$item->created_at->format('d-m-y')}}</p>
                                    </div>
                                </a>
                        </div>
    
                    @endforeach
                    
                </div>

            </div>

            

          </div>
          
        </div>


      </div>
    </div>

@inject('images', 'App\Image') 
@inject('categories', 'App\Category') 
@inject('users', 'App\User') 
@inject('items_bundle', 'App\Item') 
<div id="myCarousel" class="carousel slide" data-ride="carousel" 
style="background-image:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url('{{ URL::to('/') }}/article-images/{{$images::where('article_id',$page_id)->where('image_type','article')->first()->image}}');height:60vh;background-size: cover; background-position: center center;">
      <div class="carousel-caption">
        <h1 style="color:white" class="lora-font mb-5">Blog</h1>
        
       
      </div>
    </div>

    
    <div class="mb-5">
      <div class="container">


        <div class="row">

          <div class="col-lg-12">

            <div class="row">
                @php($find = array("<p>","</p>","<b>","</b>"))
                @foreach($items as $item)

                    <div class="col-md-4">
                        <div class=" mb-4 ">
                            
                        <div class="col-lg-12" style="background-image: url('{{ URL::to('/') }}/article-images/{{$images::where('article_id',$item->id)->where('image_type','item')->first()->image}}');height:250px;background-size: cover; background-position: center center;">

                        </div>

                            <div class="card-body p-0">

                            <p class="card-text mt-3 mb-2">
                                {{$item->created_at->format('d-m-Y')}}
                            </p>

                            <a href="{{route('pages',['insights',$item->link])}}">
                                <h3 class="card-text mt-2 mb-2">
                                {{$item->title}}
                                </h3>
                            </a>

                            <p class="card-text mt-2 mb-2 text-justify">
                                @php($content = str_replace($find,'',$item->content))
                                {{ substr($content,0,strpos($content,' ',100)) }}
                             </p>
                            
                            </div>
                        </div>
                    </div>

                    


                        <!-- <div class="row mt-5">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12" style="background-image: url('{{ URL::to('/') }}/article-images/{{$images::where('article_id',$item->id)->where('image_type','item')->first()->image}}');height:60vh;background-size: cover; background-position: center center;">

                                    </div>
                                    <div class="col-lg-2 blog-categorize pt-1 text-center" >
                                            <p>{{$categories::where('id',$item->category_id)->first()->title}}</p>
                                    </div>
                                </div>
                                <div class="row" style="border:1px solid #dee2e6">
                                    <div class="col-lg-12">
                                        <a class="pl-3 pb-3" href="{{route('pages',['insights',$item->link])}}">
                                            <h3 class="pl-3 pt-3">
                                                {{$item->title}}
                                            </h3>
                                        </a>
                                        
                                        <div class="p-3" style="word-wrap: break-word;">
                                            {!! $item->content !!}
                                        </div>

                                        <a class="pl-3 pb-3" href="{{route('pages',['insights',$item->link])}}">Read More</a>

                                    </div>
                                    <div class="col-lg-12 " style="border-top:1px solid #dee2e6">
                                        <p class="pt-2 pl-3">By: {{$users::where('id',$item->user_id)->first()->name}}  Date: {{$item->created_at->format('d-m-y')}}</p>
                                    </div>
                                </div>
                            </div>

                        </div> -->

                @endforeach
            
           
            </div>
    
          </div>

          <!-- <div class="col-lg-4">

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
                <b class="lora-font font-weight-bold">Categories</b>
                <div class="col-lg-12">

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
          
        </div> -->

        <div class="row pt-5 mb-5">

            <div class="col-lg-12 pl-2 d-flex align-items-sm-center">

                {{ $items->links() }}

            </div>
        </div>


      </div>
    </div>
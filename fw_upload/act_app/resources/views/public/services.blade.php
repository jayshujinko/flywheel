@inject('images', 'App\Image')
@inject('articles', 'App\Article')
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="background:linear-gradient(rgba(5, 5, 5, 0.35), rgba(3, 3, 3, 0.35)),url('{{ URL::to('/') }}/article-images/{{$images::where('article_id',$page_id)->first()->image}}');height:60vh;background-size: cover; background-position: center center;">
      <div class="carousel-caption">
        <h1 style="color:white" class="lora-font ">{{ $articles::find($page_id)->title }}</h1>
        <p>{{ $articles::find($page_id)->sub_title }}</p>
       
      </div>
    </div>

    
    <div>
      <div class="container">


        <div class="row">

            <div class="col-lg-3" >
                @if($articles::where('page_id',1)->where('status',$menu_id)->count() > 0)
                    <div class="row " style="border:1px solid #dee2e6" class="mb-5">
                        
                            @foreach($articles::where('page_id',1)->where('status',$menu_id)->get() as $article_side)
                                @if($article_side->title == $current_page)
                                    <div class="col-lg-12 pl-2 pt-1 side-menu-active" >
                                @else
                                    <div class="col-lg-12 pl-2 pt-1 side-menu">
                                @endif
                                
                                    <p><a href="{{route('pages',[$pass_menu,$article_side->link])}}">{{$article_side->title}}</a></p>
                                </div>
                            @endforeach
                        
                    </div>
                @endif

                <div class="row ">
                    <div class="col-lg-12 p-5 mb-3 mt-5" style="background: #262b3e;height:300px; color:white">
                        <h3 style="color:white" class="lora-font">Need Help?</h3>
                        <p>
                            Want to find out how Flywheel can provide solutions specific to your business? Let's talk.
                        </p>
                        <a href="{{url('/contact-us')}}" class="box-link">Contact now</a>
                    </div>
                    
                </div>
            </div>

            <div class="col-lg-9 pl-5">
                <div class="row">

                    

                    @if($articles::find($page_id))
                        {!! $articles::find($page_id)->content !!}
                    @endif
                </div>
                
                </div>
            </div>
          
        </div>


      </div>
    </div>
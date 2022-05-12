@inject('images', 'App\Image') 
@inject('categories', 'App\Category') 
@inject('menus', 'App\Menu') 
@inject('items', 'App\Item') 
@inject('articles', 'App\Article') 

@if($images::where('article_id',$page_id)->where('image_type','article')->first())
  <div id="myCarousel" class="carousel slide" data-ride="carousel" 
      style="background-image: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url('{{ URL::to('/') }}/article-images/{{$images::where('article_id',$page_id)->where('image_type','article')->first()->image}}');height:60vh;background-size: cover; background-position: center center;"
      
      >
@else
  <div id="myCarousel" class="carousel slide" data-ride="carousel" 
      style="height:60vh;background-size: cover; background-position: center center;"
      >
@endif
      
      <div class="container">
        <div class="carousel-caption">
          @if($articles::where('id',$page_id)->first())
            <h1 style="color:white" class="lora-font">{{$articles::where('id',$page_id)->first()->title}}</h1>
          @endif

          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
         
        </div>
      </div>
    </div>

    
    <div class="container">


        <div class="row">

            <div class="col-lg-3" >
                

                <div class="row ">
                    <div class="col-lg-12 mt-5 p-5 " style="background: #262b3e;height:300px; color:white">
                        <h3 style="color:white" class="lora-font">Need Help?</h3>
                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, Sed vitae lacus eleifend, malesuda
                        </p>
                        <a href="#" class="box-link">Contact now</a>
                    </div>
                    
                </div>
            </div>

            <div class="col-lg-9 pl-5">
                <div class="row"> 
                @if($articles::where('id',$page_id)->first())
						        {!! $articles::where('id',$page_id)->first()->content !!}
                @endif
                </div>
                
                </div>
            </div>
          
        </div>


      </div>
    </div>
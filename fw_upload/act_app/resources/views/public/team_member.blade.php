@inject('images', 'App\Image') 
@inject('categories', 'App\Category') 
@inject('menus', 'App\Menu') 
@inject('items', 'App\Item') 
@inject('articles', 'App\Article') 

@if($images::where('article_id',$page_id)->where('image_type','article')->first())
  <div id="myCarousel" class="carousel slide" data-ride="carousel" 
      style="background-image:linear-gradient(rgba(5, 5, 5, 0.35), rgba(3, 3, 3, 0.35)), url('{{ URL::to('/') }}/article-images/{{$images::where('article_id',$page_id)->where('image_type','article')->first()->image}}');height:60vh;background-size: cover; background-position: center center;"
      
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

          <p>{{$articles::where('id',$page_id)->first()->sub_title}}</p>
         
        </div>
      </div>
    </div>

    
    <div class="container">

        @php ($team_res = $items::where('article_type','sub_item')->where('link',$item)->where('page_id',$menus::where('menu_link','home')->first()->id)->first())
       
        <div class="row">

            <div class="col-lg-4" >
                

                <div class="row ">
                @if($team_res)
                    
                    <div class="col-lg-12 pl-3 mb-3" style="height:350px;background-image: url('{{ URL::to('/') }}/article-images/{{$images::where('image_type','item')->where('article_id',$team_res->id)->first()->image}}');background-size: cover; background-position: center center;">
      
                @else
                    <div class="col-lg-12 pl-3 mb-3" style="height:350px;background:grey">
                @endif

                    </div>
                    
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row"> 
                    <div class="col-lg-12 pl-3" style="height:80px;height:auto;margin: 0 auto;">
                            @if($team_res)
                                <b class="mb-3" style="font-weight:bold">{{$team_res->title }}</b>
                                {!! $team_res->content !!}
                            @endif
                    </div>

                </div>

               
          
        </div>


      </div>
    </div>
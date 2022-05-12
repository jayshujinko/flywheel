@inject('images', 'App\Image')
@inject('articles', 'App\Article')
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="background:url('{{ URL::to('/') }}/article-images/{{$images::where('article_id',$page_id)->first()->image}}');height:60vh;background-size: cover; background-position: center center;">
        <div class="container">
          <div class="carousel-caption">
            <h1 style="color:white" class="lora-font mb-5">{{ $articles::find($page_id)->title }}</h1>
            
           
          </div>
        </div>
    </div>

    
    <div class="site-section  border-bottom pt-0">
      <div class="container ">


        
        <div class="row" style="border:1px solid #dee2e6">


          <div class="col-md-4 p-0" >
         

            
            <div class="row m-0" 
            style="background:url('{{ URL::to('/') }}/article-images/{{$images::where('article_id',$page_id)->first()->image}}');height:90vh;background-size: cover; background-position: center center;" >
              
            </div>
            
          </div>
          
    
          <div class="col-md-8" style="font-size:14px;">
            
            <div class='row mt-3 p-3'>
              
             
                {!! $articles::find($page_id)->content !!}
              
    
              </div>
    
          </div>
          
        </div>



      

      </div>
    </div>
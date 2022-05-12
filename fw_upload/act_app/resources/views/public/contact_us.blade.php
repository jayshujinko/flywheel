@inject('images', 'App\Image') 
@inject('categories', 'App\Category') 
@inject('menus', 'App\Menu') 
@inject('items', 'App\Item') 
@inject('articles', 'App\Article') 

@if($items::select('id')->where('page_id',5)->where('status',1)->first())

<div id="myCarousel" class="carousel slide" data-ride="carousel" 
    
style="
    background-image:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)), 
        url('{{ URL::to('/') }}/article-images/{{$images::where('article_id','3')->where('image_type','item')->first()->image}}');
        height:60vh;background-size: cover; background-position: center center;"

>

@else

<div id="myCarousel" class="carousel slide" data-ride="carousel" 
    
        style="height:60vh;background-size: cover; background-position: center center;"
    
        >

@endif  
      <div class="container">
        <div class="carousel-caption">
        <h1 style="color:white" class="lora-font ">{{ $menus::find($page_id)->title }}</h1>
        <p>{{ $menus::find($page_id)->sub_title }}</p>
         
        </div>
      </div>
    
    </div>

    
    <div class="mb-5 mt-0">
      <div class="container" >

        <div class="row" >

            <div class="col-md-6"  >
                    

                    <div class="row p-3">
                        <div class=" mr-3" style="width:60px;height:60px;background:url('{{ URL::to('/') }}/img/hse.png');background-size: cover; background-position: center center;">

                        </div>
                        <div class="col-md-9 pl-4" style="height:60px;">
                                <div class="row" style="color:#b51419;font-weight:bold">
                                        Head Office
                                </div>
                                <div class="row">
                                     Vienna Court, Ground Floor, West Wing Building.
                                </div>
                        </div>
                    </div>

                    <div class="row p-3">
                        <div class="mr-3" 
                         style="width:60px;height:49px;background:url('{{ URL::to('/') }}/img/email.png');background-size: cover; background-position: center center;">

                        </div>
                        <div class="col-md-9 pl-4" style="height:60px;">
                                <div class="row" style="color:#b51419;font-weight:bold">
                                        P.O. Box
                                </div>
                                <div class="row">
                                        66932-00200
                                </div>
                        </div>
                    </div>

                    <div class="row p-3">
                        <div class=" mr-3" 
                        style="width:60px;height:60px;background:url('{{ URL::to('/') }}/img/headset.png');background-size: cover; background-position: center center;">

                        </div>
                        <div class="col-md-9 pl-4" style="height:60px;">
                                <div class="row" style="color:#b51419;font-weight:bold">
                                        Telephone
                                </div>
                                <div class="row">
                                    +254 (020) 5138520
                                </div>
                        </div>
                    </div>

                    <div class="row p-3">
                        <div class="mr-3" 
                        style="width:60px;height:60px;background:url('{{ URL::to('/') }}/img/clock.png');background-size: cover; background-position: center center;">

                        </div>
                        <div class="col-md-9 pl-4" style="height:60px;">
                                <div class="row" style="color:#b51419;font-weight:bold">
                                        Office Hours
                                </div>
                                <div class="row">
                                        8 am – 5 pm Monday – Friday
                                </div>
                        </div>
                    </div>
            </div>

            <div class="col-md-6">

                    <div class="row">
                        <div class="col-lg-12" style="word-wrap: break-word;">
                                @if($items::where('page_id',7)->where('article_type','item')->where('status',1)->first())
                                    <h3>{{ $items::where('page_id',7)->where('status',1)->first()->title }}</h3>
                                @endif
                           
                        <div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12" style="word-wrap: break-word;">
                            @if($items::where('page_id',7)->where('article_type','item')->where('status',1)->first())
                                {!! $items::where('page_id',7)->where('status',1)->first()->content !!}
                            @endif
                        <div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12" style="word-wrap: break-word;">
                            
                                <div class="col-12">
                                    <form>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                            </div>
                                            
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1">Phone</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1">Subject</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Message</label>
                                            <textarea class="form-control" placeholder="Write a Message..." id="exampleFormControlTextarea1" rows="9"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <input type="button" class='my-submit-btn btn contact-us-btn' value="Submit" />
                                        </div>
                                       
                                    </form>
                                </div>
                           
                        <div>
                    </div>
            </div>

        </div>
        </div>
        </div>
    </div>
</div>
</div>
</div>

    
         
          
        </div>


      </div>
    </div>
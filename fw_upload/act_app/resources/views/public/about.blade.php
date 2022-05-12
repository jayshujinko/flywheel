@inject('images', 'App\Image') 
@inject('categories', 'App\Category') 
@inject('menus', 'App\Menu') 
@inject('items', 'App\Item') 
@inject('articles', 'App\Article') 

@if($images::where('article_id',$page_id)->where('image_type','article')->first())
  <div id="myCarousel" class="carousel slide" data-ride="carousel" 
      style="background-image:linear-gradient(rgba(5, 5, 5, 0.35), rgba(3, 3, 3, 0.35)),url('{{ URL::to('/') }}/article-images/{{$images::where('article_id',$page_id)->where('image_type','article')->first()->image}}');height:60vh;background-size: cover; background-position: center center;"
      
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
            <p>{{$articles::where('id',$page_id)->first()->sub_title}}</p>
          @endif

          
        </div>
      </div>
    </div>

    
    <div class="container">


        <div class="row">

            <div class="col-lg-3" >
                

                <div class="row ">
                    <div class="col-lg-12 mt-5 p-5 mb-3" style="background: #262b3e;height:300px; color:white">
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
                @if($articles::where('id',$page_id)->first())
						        {!! $articles::where('id',$page_id)->first()->content !!}
                @endif
                </div>

                @if($pass_page =='careers')

                      <div class="col-12">
                            <form>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Last Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Area of Interest</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Years of Experience</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="button" class='btn my-submit-btn' value="Submit" />
                                </div>
                                
                            </form>
                        </div>

                @endif


                @if($pass_page =='partners')

                <div class="col-12">
                            <form>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Company Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Registered Address</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Website</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Date of incorporation</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Contact Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Country</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">City</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="button" class='btn my-submit-btn' value="Submit" />
                                </div>
                                
                            </form>
                        </div>
                @endif


                @if($pass_page =='our-team')

                    <div class="col-12">
                    <div class="row">
                            @php($new_team = $items::where('page_id','6')->where('article_type','sub_item')->where('status',1)->get())
                            @if(!empty($new_team))
                                @foreach($new_team as $nt)

                                    <div class="col-lg-4 pt-3 pl-3 pr-0 ">

                                        <div class="col-lg-12 team-wrapper pt-3">
                                            <img src="{{ URL::to('/') }}/article-images/{{$images::where('article_id',$nt->id)->where('image_type','item')->first()->image}}" class="col-lg-12 m-0"/>
                                            <a href="{{ URL::to('/') }}/about-us/who-we-are/{{$nt->link}}"><div class="col-lg-12 text-center p-4">
                                                    <b>{{$nt->title}}</b> <br />
                                                </div></a>
                                        </div>

                                    </div>

                                
                                @endforeach
                            
                            @endif


                            </div>
                    </div>
                @endif
                
                </div>
            </div>
          
        </div>


      </div>
    </div>
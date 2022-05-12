@inject('images', 'App\Image')
@inject('menus', 'App\Menu')
@inject('items', 'App\Item')
@inject('articles', 'App\Article')

<div id="myCarousel" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators homepage-carousel-indicators">
        
          @foreach($sliders as $slider)
          
            <li data-target="#myCarousel" data-slide-to="{{$loop->index}}" class="d-flex">

              <div style="width:inherit;height:inherit;" class="col-md-4">
      
              </div>
      
              <div style="width:inherit;height:inherit;font-size:12px; " class="col-md-8 d-flex align-items-end text-center">
                <p>{{$slider->title}}</p>
              </div>
        
            </li>
          @endforeach
  
      </ol>

      <div class="carousel-inner">

        @foreach($sliders as $slider)
          @if($loop->index == 0)
            <div class="carousel-item active custom-carousel-item-height">
          @else
            <div class="carousel-item custom-carousel-item-height">
          @endif

            @if($images::where('article_id',$slider->id)->where('image_type','article')->first())
              <div class="car_img_cover">

                  <img class="d-block w-100" src="{{ URL::to('/') }}/article-images/{{$images::where('article_id',$slider->id)->where('image_type','article')->first()->image}}" width="100%" height="100%" alt="Second slide">
           
              </div>
              
              @endif

            <div class="container" >
              <div class="carousel-caption text-left">
                <h1 style="color:white" class="lora-font slider-text ">{{$slider->title}}</h1>
                <p class='slider-text'>{{$slider->sub_title}}</p>
                <p class='slider-text'><a class="btn btn-lg btn-primary" href="#" role="button">Read More</a></p>
              </div>
            </div>
            
          </div>
        @endforeach

        
        

      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    
    <div class="site-section  border-bottom">
      <div class="container">
        
        <div class="row">
          <div class="col-md-4">
            <div class="row">
                <div class="col-lg-3">
                    <img src="img/home.png" />
                </div>
                <div class="col-lg-9">
                  <h4 style="text-transform: uppercase;font-size: 18px;">About Flywheel</h4>

                  @if($menus::where('menu_link','home')->first())

                      @php($left_about_item = $items::where('page_id',$menus::where('menu_link','home')->first()->id)->where('article_type','item')->orderBy('id','desc')->first())

                      @if($left_about_item)
                        <p class="lead lora-font" style="font-size: 25px;">
                          {{$left_about_item->title}}
                        </p>
                        <p>
                        {!! $left_about_item->content !!}
                        </p>
                      @endif

                  @endif

                  
                </div>
            </div>
            
          </div>
          <div class="col-md-8 mb-4" style="background-color: #b51419;color:white;">
            <div class="m-5" style="color:white;">
              @if($menus::where('menu_link','home')->first())

                  @php($right_about_item = $items::where('page_id',$menus::where('menu_link','home')->first()->id)->where('article_type','item')->first())

                  @if($right_about_item)
                      
                      {!! $right_about_item->content !!}
                      
                  @endif
              @endif

            </div>
            
          
          </div>
        </div>



        
        <div class="row mt-3 pt-3">
      
          <div class="my-5 container"  >
            <div class="row">
              <div class="col-lg-1">
                <img src="img/team.png" />
              </div>
              <div class="col-lg-11">
                <h4 style="text-transform: uppercase;font-size: 18px;">WHAT WE DO</h4>
                <h3 class="lora-font">Our Services</h3>
                <p>
                  Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. 
                </p>
              </div>
            </div>

            <div class="row">

              <div class="col-lg-3 ">
                <div class="row">
                   
                   <div class="col-lg-12 p-2">
                        <div class="service-wrapper p-3">
                          <div class="service-icon">

                          </div>
                          <h5>Heading Text</h5>
                            <p>
                              Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                              Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                            </p>

                            <div class='col-lg-12 text-center'>
                                <a href="" class="services-home-link p-2">Read More</a>
                            </div>

                      </div>
                       
                    </div>
      
                </div>
          
              </div>

                <div class="col-lg-3 ">
                  <div class="row">
                     
                     <div class="col-lg-12 p-2">
                          <div class="service-wrapper p-3">
                            <div class="service-icon">

                            </div>
                            <h5>Heading Text</h5>
                              <p>
                                Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                              </p>
  
                              <div class='col-lg-12 text-center'>
                                <a href="" class="services-home-link p-2">Read More</a>
                              </div>
                        </div>
                         
                      </div>
        
                  </div>
            
                </div>

              <div class="col-lg-3 ">
                <div class="row">
                   
                   <div class="col-lg-12 p-2">
                        <div class="service-wrapper p-3">
                          <div class="service-icon">

                          </div>
                          <h5>Heading Text</h5>
                            <p>
                              Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                              Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                            </p>

                            <div class='col-lg-12 text-center'>
                              <a href="" class="services-home-link p-2">Read More</a>
                            </div>
                      </div>
                       
                    </div>
      
                </div>
          
              </div>

              <div class="col-lg-3 ">
                <div class="row">
                   
                   <div class="col-lg-12 p-2">
                        <div class="service-wrapper p-3">
                          <div class="service-icon">

                          </div>
                            <h5>Heading Text</h5>
                            <p>
                              Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                              Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                            </p>

                            <div class='col-lg-12 text-center'>
                              <a href="" class="services-home-link p-2">Read More</a>
                            </div>
                      </div>
                       
                    </div>
      
                </div>
          
              </div>

              
            </div>
         </div>


         <div class="row mt-3 pt-3">
      
          <div class="my-5 container"  >
            <div class="row">
              <div class="col-lg-1">
                <img src="img/team.png" />
              </div>
              <div class="col-lg-11">
                <h4 style="text-transform: uppercase;font-size: 18px;">OUR PROFFESIONALS</h4>
                <h3 class="lora-font">Meet Our Team</h3>
                <p>
                  Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. 
                </p>
              </div>
            </div>

            <div class="row">
                <div class="col-lg-6 team-wrapper">
                      <div class="row">
                         <div class="col-lg-6 p-0">
                            <img src="img/christina.jpg" class="col-lg-12 m-0"/>
                            <div class="col-lg-12 text-center p-4" style="border-top:1px solid #dee2e6;">
                                   <b>John Doe</b> <br />
                                   <b>CEO</b> 
                            </div>
                         </div>
                         <div class="col-lg-6 p-3" style="border-left:1px solid #dee2e6;">
                              <p>
                                Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                              </p>
                              <p>
                                Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                              </p>
                        </div>
                      </div>
                      
                </div>
                <div class="col-lg-6 team-wrapper-2">
                  <div class="row">
                    <div class="col-lg-6 p-0">
                       <img src="img/christina.jpg" class="col-lg-12 m-0"/>
                       <div class="col-lg-12 text-center p-4" style="border-top:1px solid #dee2e6;">
                              <b>John Doe</b> <br />
                              <b>CEO</b> 
                       </div>
                    </div>
                    <div class="col-lg-6 p-3" style="border-left:1px solid #dee2e6;">
                         <p>
                           Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                           Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                         </p>
                         <p>
                           Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                           Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                         </p>
                   </div>
                 </div>
                </div>
            </div>

    
            </div>
         </div>


        
        </div>


        <div class="row">

          <div class='col-lg-12 text-center'>
            <a href="" class="services-home-link p-3 m-5">View All Services</a>
          </div>

        </div>
          


        <div class="row mt-5">

          <div class="col-md-4" >
            <div class="mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4 p-2">
                    <img src="img/bulb.png"  class='mt-4 ml-3' height="75px" width="75px" />
                  </div>
                  <div class="col-md-8 p-3 " >
                    <h3 class="mb-4">Check Our Latest Tips & News</h3>
                    <p class="card-text mb-lg-5">
                      This is a wider card with supporting text below. 
                      This is a wider card with supporting text below
                     
                    </p>
                    
                      <a href="{{url('/insights')}}" class="col-lg-10 p-3 " style="background-color: #b51419;color:white;height:50px;">More Blog ></a>
                    
                    </div>
                </div>
              </div>
              
            </div>
          </div>


          
    
          


            @if($menus::where('menu_link','solutions')->first())

                  @php ($service_item = $articles::where('page_id',$menus::where('menu_link','solutions')->where('status',1)->first()->id)->limit(2)->orderBy('id')->get())
                  @if($service_item->count() > 0)

                  
                  
                  @foreach($service_item as $val_service_item)

                  <div class="col-md-4">
                  <div class="mb-4" >

                  <div class="row">

                          <div class="col-md-5 m-0">
                            <img 
                              src="{{ URL::to('/') }}/article-images/{{$images::where('article_id',$val_service_item->id)->where('image_type','article')->first()->image}}" class='ml-2' height="200px" width="310px" />
                          </div>

                          <div class="col-sm-9 text-center ml-4" style="margin-top:-16px;height:35px;padding:3px;background-color: #b51419;color:white;">
                              <p>{{$val_service_item->title}}</p>
                          </div>

                          </div>

                          <div class="row">
                          <div class="col-md-10 mt-lg-5">
                            <div class="row">
                                <div class="col-12">
                                  <p class='ml-2'>
                                    {!! $val_service_item->sub_title !!}
                                  </p>
                                </div>
                            </div>
                            
                              <div class="row d-flex align-items-center ml-2">
                                <div class='col-sm-1' style="height:3px;background-color:#b51419;"></div>
                                <div class='col-sm-10'><a  href="{{route('pages',['solutions',$val_service_item->link])}}">Read More</a></div>
                              </div>
                          </div>

                          </div> 
                          </div>
                          </div>

                          

                    @endforeach

                    
                            
                  @endif

            @endif

              
    
            

          
    
        </div>

      </div>
    </div>

@include('public.header')

<div id="myCarousel" class="carousel slide mb-3" data-ride="carousel" style="background-image: url({{asset('img/computer-lock.jpg')}});height:60vh;background-size: cover; background-position: center center;">
        <div class="container">
          <div class="carousel-caption">
            <h1 style="color:white" class="lora-font">404</h1>
            <p>Page Not Found</p>
           
          </div>
        </div>
    </div>

    
    <div class="site-section pt-0 border-bottom">
      <div class="container">
        
        <div class="row mt-0" style="border:1px solid #dee2e6" >


          <div class="col-md-4 p-0" >
            <div class="row m-0" style="background:url({{asset('img/pollock.jpg')}});height:90vh;background-size: cover; background-position: center center;">
              
            </div>
          </div>
          
    
          <div class="col-md-8" style="font-size:14px;">
            
            <div class='row mt-5 mb-5'>
                
                <div class="col-md-12" >
                    
                    <b>
                  Try searching for the best match or browse the links below:
                  </b>
					
					<form action="#" method="get" class="nobottommargin mt-3">
							<div class="input-group input-group-lg">
								<input type="text" class="form-control" placeholder="Search for Pages...">
								<div class="input-group-append ">
									<button class="btn" style="background:#b51419;color:white" type="button">Search</button>
								</div>
							</div>
					</form>
                </div>
            </div>
    
    
          </div>
          
        </div>



      

      </div>
    </div>


@include('public.footer');


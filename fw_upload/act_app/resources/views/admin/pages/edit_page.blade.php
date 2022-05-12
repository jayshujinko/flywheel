@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @inject('menus', 'App\Menu')
    @inject('images', 'App\Image')    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Edit Page  </b> {{$page->title}}</div>

                <div class="card-body">
                    

                    <div class="row">

                    
                         
                        
                        <div class="col-md-6">

                            <form action="{{route('admin.pages.update',$page->id)}}" method="POST" enctype="multipart/form-data">


                                <div class="form-group row">
                                    <label for="page_title" class="col-md-4 col-form-label text-md-right">Page Title</label>
                                    {{ method_field('PUT')}}
                                    <div class="col-md-6">
                                        <input id="page_title" type="text" class="form-control @error('page_title') is-invalid @enderror" name="page_title" value="{{$page->title}}" required autocomplete="page_title" autofocus>

                                        @error('page_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                <label for="main_menu" class="col-md-4 col-form-label text-md-right">Menu</label>

                                <div class="col-md-6">
                                    <select class="form-control @error('main_menu') is-invalid @enderror" name="main_menu" required>
                                        @foreach($menus::where('status',1)->get() as $menu)
                                            <option value="{{$menu->id}}"
                                                @if($menu->id == $page->menu_id) selected @endif
                                            >{{$menu->title}}</option>
                                        @endforeach
                                    </select>
                                
                                    
                                    @error('main_menu')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="page_image_01">Upload Page Image</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="page_image"
                                        accept="image/jpg, image/png, image/jpeg"
                                        aria-describedby="page_image">
                                        <label class="custom-file-label" for="page_image">Choose file</label>
                                    </div>
                                    @error('page_image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div> 

                                @csrf

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                           
                        </div>


                        <div class="col-md-6">

                                <p><b>Menu: </b> {{$menus::find($page->menu_id)->title}}<p>
                                <p><b>Page: </b> {{$page->title}}<p>

                                <div class="m-2 col-md-11">
                                    @if($images::where('article_id',$page->id)->where('image_type','page')->first())
                                        <img width="90%" src="{{ URL::to('/') }}/pages-images/{{$images::where('article_id',$page->id)->where('image_type','page')->first()->image}}" />
                                    @endif
                                </div>

                        </div>



                    </div>              
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">New Page </div>

                <div class="card-body">
                    
                    <form action="{{route('admin.pages.store')}}" method="POST" enctype="multipart/form-data">

                            
                            
                            <div class="form-group row">
                                <label for="main_menu" class="col-md-4 col-form-label text-md-right">Main Menu</label>

                                <div class="col-md-6">
                                    <select class="form-control @error('main_menu') is-invalid @enderror" name="main_menu" required>
                                            <option></option>
                                        @foreach($menus as $menu)
                                            <option value="{{$menu->id}}">{{$menu->title}}</option>
                                        @endforeach
                                    </select>
                                
                                    
                                    @error('main_menu')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <label for="page" class="col-md-4 col-form-label text-md-right">Page</label>

                                <div class="col-md-6">
                                    <input id="page" type="text" class="form-control @error('page') is-invalid @enderror" name="page" value="" required autocomplete="off" autofocus>

                                    @error('page')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sub_title" class="col-md-4 col-form-label text-md-right">Sub Title</label>

                                <div class="col-md-6">
                                    <input id="sub_title" type="text" class="form-control @error('sub_title') is-invalid @enderror" name="sub_title" value="" required autocomplete="off" autofocus>

                                    @error('page')
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
                                    aria-describedby="page_image" required>
                                    <label class="custom-file-label" for="page_image">Choose file</label>
                                </div>
                                @error('page_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div> 

                            @csrf
                            
                            <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

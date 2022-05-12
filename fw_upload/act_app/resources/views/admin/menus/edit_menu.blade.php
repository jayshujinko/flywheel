@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
   
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Edit Menu  </b> {{$menu->title}}</div>

                <div class="card-body">
                    

                    <div class="row">

                    
                         
                        
                        <div class="col-md-12">

                        <form action="{{route('admin.menus.update',$menu->id)}}" method="POST" enctype="multipart/form-data">


                            <div class="form-group row">
                                <label for="menu_title" class="col-md-4 col-form-label text-md-right">Menu Title</label>
                                {{ method_field('PUT')}}
                                <div class="col-md-6">
                                    <input id="menu_title" type="text" class="form-control @error('menu_title') is-invalid @enderror" name="menu_title" value="{{$menu->title}}" required autocomplete="off" autofocus>

                                    @error('menu_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="sub_title" class="col-md-2 col-form-label text-md-right">Sub Title</label>
                                {{ method_field('PUT')}}
                                <div class="col-md-8">
                                    <input id="sub_title" type="text" class="form-control @error('sub_title') is-invalid @enderror" name="sub_title" value="{{$menu->sub_title}}" required autocomplete="off" autofocus>

                                    @error('menu_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            @csrf
                            <div class="form-group row">
                             
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                            
                        </form>
                           
                        </div>
                    </div>              
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

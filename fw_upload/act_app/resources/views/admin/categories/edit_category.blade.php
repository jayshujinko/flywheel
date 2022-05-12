@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Category {{$category->title}}</div>

                <div class="card-body">
                    
                    <form action="{{route('admin.category.update',$category->id)}}" method="POST" enctype="multipart/form-data">

                            

                            <div class="form-group row">
                                <label for="title" class="col-md-2 col-form-label text-md-right">Title</label>

                                <div class="col-md-10">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$category->title}}" required autocomplete="title" autofocus>
                                    {{ method_field('PUT')}}
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            
                            @csrf
                            
                            <button type="submit" class="btn btn-primary float-right">Save</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

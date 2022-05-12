@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @inject('images', 'App\Image')  
    @inject('pages', 'App\Page')  
    @inject('users', 'App\User')  
    @inject('menus', 'App\Menu')  
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Page - </b> {{ucfirst($article->title)}}, <b>Menu -  </b>{{ucfirst($menus::find($article->page_id)->title)}}</div>

                <div class="card-body">
                    

                    <div class="row">
                        <div class="col-md-6">
                            <p><b>Sub Title </b>{{$article->sub_title}}</p>
                            <p><b>Created At </b>{{$article->created_at->format('d-m-y h:i:s')}}</p>
                            <p><b>Updated At </b>{{$article->updated_at->format('d-m-y h:i:s')}}</p>
                            <p><b>Status </b>@if($article->status ==1) Active @else InActive @endif</p>
                            <p><b>Appears in Slider </b>@if($article->home_page ==1) Yes @else No @endif</p>
                            <p><b>Appears on Home Page </b>@if($article->slider ==1) Yes @else No @endif</p>
                            <p><b>Created by</b> {{$users::find($article->user_id)->name}}</p>
                            <div class="card-body" style="border:1px solid #dddddd; border-radius:5px;">
                            <h4 style="text-decoration:underline">Content</h4>
                                {!! $article->content !!}
                            </div>
                        </div>
                        
                        <div class="col-md-6">

                    
                              
                            @if($images::where('article_id',$article->id)->first())
                            <img class="col-md-11 m-2" src="{{ URL::to('/') }}/article-images/{{$images::where('article_id',$article->id)->first()->image}}" />
                            @endif

                                

                                

                            
                        </div>
                    </div>              
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

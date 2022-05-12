@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @inject('images', 'App\Image')  
    @inject('pages', 'App\Page')  
    @inject('users', 'App\User')  
    @inject('menus', 'App\Menu')  
    @inject('articles', 'App\Article')  
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Page - </b> {{ucfirst($item->title)}}, 

                    @if($item->article_type == 'item')
                        <b>Menu -  </b>{{ucfirst($menus::find($item->page_id)->title)}}</div>
                    @else
                        <b>Menu -  </b>{{ucfirst($articles::where('id',$item->page_id)->first()->title)}}</div>               
                    @endif
                
                
                <div class="card-body">
                    

                    <div class="row">
                        <div class="col-md-6">
                            <p><b>Created At </b>{{$item->created_at->format('d-m-y h:i:s')}}</p>
                            <p><b>Updated At </b>{{$item->updated_at->format('d-m-y h:i:s')}}</p>
                            <p><b>Status </b>@if($item->status ==1) Active @else InActive @endif</p>
                            
                            <p><b>Created by</b> {{$users::find($item->user_id)->name}}</p>
                            <div class="card-body" style="border:1px solid #dddddd; border-radius:5px;">
                            <h4 style="text-decoration:underline">Content</h4>
                                {!! $item->content !!}
                            </div>
                        </div>
                        
                        <div class="col-md-6">

                    
                              
                            @if($images::where('article_id',$item->id)->where('image_type','item')->first())
                            <img class="col-md-11 m-2" src="{{ URL::to('/') }}/article-images/{{$images::where('article_id',$item->id)->where('image_type','item')->first()->image}}" />
                            @endif

                                

                                

                            
                        </div>
                    </div>              
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

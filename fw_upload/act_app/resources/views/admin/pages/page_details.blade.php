@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @inject('images', 'App\Image')  
    @inject('menus', 'App\Menu')  
    @inject('articles', 'App\Article')
    @inject('users', 'App\User') 
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Page - </b> {{$page->title}}</div>

                <div class="card-body">
                

                    <div class="row">
                        
                        <div class="col-md-6">
                                <p><b>Sub Title </b>{{ $page->sub_title }}</p>
                                <p><b>Menu </b>{{$menus::find($page->menu_id)->title}}</p>
                                <p><b>Created At </b>{{ $page->created_at->format('d-m-y h:i:s') }}</p>
                                <p><b>Updated At </b>{{ $page->updated_at->format('d-m-y h:i:s') }}</p>
                                <p><b>Status </b>@if($page->status ==1) Active @else InActive @endif</p>
                                <p><b>Created by</b> {{$users::find($page->user_id)->name}}</p>
                                
                                <h4 class='text-center mt-5 mb-3'>Page's Articles</h4>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Article</th>
                                            <th>Status</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($articles::where('page_id',$page->id)->orderBy('article_order','ASC')->get() as $article)
                                            <tr>
                                                <td>
                                                    @if($article->status ==0) <s> @endif
                                                        {{$article->title}}
                                                    @if($article->status ==0) </s> @endif
                                                </td>
                                                <td>@if($article->status ==1) Active @else InActive @endif</td>
                                                <td>
                                                    <form action="{{route('admin.order_up')}}" method="POST">  
                                                        @csrf
                                                        <input type="hidden" value="{{$page->id}}" name="page_id" />
                                                        <input type="hidden" value="{{$article->id}}" name="article_id" />
                                                        <input type="submit" class="btn glyphicon btn-primary btn-sm" value="up"/>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{route('admin.order_down')}}" method="POST">  
                                                        @csrf 
                                                        <input type="hidden" value="{{$page->id}}" name="page_id" />
                                                        <input type="hidden" value="{{$article->id}}" name="article_id" />
                                                        <input type="submit" class="btn glyphicon btn-primary btn-sm" value="down" />
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>

                        <div class="col-md-6">
                            @if($images::where('article_id',$page->id)->where('image_type','page')->first())
                            <img class="col-md-11 m-2" 
                                src="{{ URL::to('/') }}/pages-images/{{$images::where('article_id',$page->id)->where('image_type','page')->first()->image}}" 
                                />
                            @endif
                        </div>

                    </div>

                                 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

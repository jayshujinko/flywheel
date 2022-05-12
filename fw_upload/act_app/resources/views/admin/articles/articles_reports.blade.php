@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pages </div>

                <div class="card-body">
                @inject('pages', 'App\Page')   
                @inject('menus', 'App\Menu')  
                <div class="row">
                        <div class="col-6">
                                <form action="{{route('admin.search_articles')}}" method="POST">
                                    <div class="form-group row">
                                        <label for="search_title" class="col-md-4 col-form-label text-md-right">Search Pages</label>
                                        @csrf
                                        <div class="col-md-8">
                                            <input id="search_title" type="text" class="form-control @error('search_title') is-invalid @enderror" name="search_title" value="" required autocomplete="off" autofocus>

                                            @error('search_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </form>
                                

                        </div>
                </div>

                <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                               
                                @foreach($articles as $article)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>
                                            @if($article->status == 0) <s> @endif
                                                {{ $article->title }}
                                            @if($article->status == 0) </s> @endif
                                        </td>
                                        <td>{{ $menus::find($article->page_id)->title }}</td>
                                        <td>{{ $article->created_at->format('d-m-y') }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('admin.pages.show', $article->id)}}"><button type="button" class="btn btn-info mr-1 btn-sm">Details</button></a>
                                           
                                            <a href="{{ route('admin.pages.edit', $article->id)}}"><button type="button" class="btn btn-warning mr-1 btn-sm">Edit</button></a>
                                           
                                            <form action="{{ route('admin.pages.destroy',$article->id) }}" method="POST" >
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger mr-1 btn-sm">@if($article->status == 1) Disable @else Enable @endif</button>
                                            </form>
                                        </td>
                                    </tr>
                               
                                @endforeach
                        </tbody>

                </table>
                {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

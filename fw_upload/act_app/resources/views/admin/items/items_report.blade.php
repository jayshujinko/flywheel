@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Items</div>

                <div class="card-body">
    @inject('menus', 'App\Menu')                
    @inject('articles', 'App\Article')                
                <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Page</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                               
                                @foreach($items as $item)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>
                                            @if($item->status == 0) <s> @endif
                                                {{ $item->title }}
                                            @if($item->status == 0) </s> @endif
                                        </td>
                                        @if($item->article_type == 'item')
                                            <td>
                                                {{$menus::where('id',$item->page_id)->first()->title}}
                                            </td>
                                        @else
                                            <td>
                                                {{$articles::where('id',$item->page_id)->first()->title}}
                                            </td>
                                        @endif
                                        
                                        <td>{{ $item->created_at->format('d-m-y') }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('admin.items.show', $item->id)}}"><button type="button" class="btn btn-info mr-1 btn-sm">Details</button></a>
                                           
                                            <a href="{{ route('admin.items.edit', $item->id)}}"><button type="button" class="btn btn-warning mr-1 btn-sm">Edit</button></a>
                                            <form action="{{ route('admin.items.destroy',$item->id) }}" method="POST" >
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <input type="hidden" value="@if($item->status == 1) 0 @else 1 @endif" name="page_status" />
                                            <button type="submit" class="btn btn-danger mr-1 btn-sm">@if($item->status == 1) Disable @else Enable @endif</button>
                                            </form>

                                        </td>
                                    </tr>
                               
                                @endforeach
                        </tbody>

                </table>
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

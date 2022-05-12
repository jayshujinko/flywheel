@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pages</div>

                <div class="card-body">
    @inject('menus', 'App\Menu')                
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
                               
                                @foreach($pages as $page)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>
                                            @if($page->status == 0) <s> @endif
                                                {{ $page->title }}
                                            @if($page->status == 0) </s> @endif
                                        </td>
                                        <td>{{ $menus::find($page->menu_id)->title }}</td>
                                        <td>{{ $page->created_at->format('d-m-y') }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('admin.pages.show', $page->id)}}"><button type="button" class="btn btn-info mr-1 btn-sm">Details</button></a>
                                            <a href="{{ route('admin.pages.edit', $page->id)}}"><button type="button" class="btn btn-warning mr-1 btn-sm">Edit</button></a>
                                            <form action="{{ route('admin.pages.destroy',$page->id) }}" method="POST" >
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <input type="hidden" value="@if($page->status == 1) 0 @else 1 @endif" name="page_status" />
                                            <button type="submit" class="btn btn-danger mr-1 btn-sm">@if($page->status == 1) Disable @else Enable @endif</button>
                                            </form>

                                        </td>
                                    </tr>
                               
                                @endforeach
                        </tbody>

                </table>
                    {{ $pages->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

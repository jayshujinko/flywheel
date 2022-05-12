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
                            <th scope="col">Created At</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                               
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>
                                            @if($category->status == 0) <s> @endif
                                                {{ $category->title }}
                                            @if($category->status == 0) </s> @endif
                                        </td>
                                        
                                        <td>{{ $category->created_at->format('d-m-y') }}</td>
                                        <td class="d-flex">
            
                                            <a href="{{ route('admin.category.edit', $category->id)}}"><button type="button" class="btn btn-warning mr-1 btn-sm">Edit</button></a>
                                            <form action="{{ route('admin.category.destroy',$category->id) }}" method="POST" >
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <input type="hidden" value="@if($category->status == 1) 0 @else 1 @endif" name="page_status" />
                                            <button type="submit" class="btn btn-danger mr-1 btn-sm">@if($category->status == 1) Disable @else Enable @endif</button>
                                            </form>

                                        </td>
                                    </tr>
                               
                                @endforeach
                        </tbody>

                </table>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

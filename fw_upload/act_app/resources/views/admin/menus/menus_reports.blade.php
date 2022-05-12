@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pages</div>

                <div class="card-body">
               
                <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                               
                                @foreach($menus as $menu)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{ $menu->title }}</td>
                                        <td>{{ $menu->created_at->format('d-m-y h:i:s') }}</td>
                                        <td>{{ $menu->updated_at->format('d-m-y h:i:s') }}</td>
                                        <td><a href="{{ route('admin.menus.edit', $menu->id)}}"><button type="button" class="btn btn-info mr-1 btn-sm">Edit</button></a></td>
                                    </tr>
                               
                                @endforeach
                        </tbody>

                </table>
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

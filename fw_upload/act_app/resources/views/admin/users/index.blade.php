@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)   
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email}}</td>
                                <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</td>
                                <td class="d-flex">
                                    @can('edit-users')
                                    <a href="{{ route('admin.users.edit', $user->id)}}"><button type="button" class="btn btn-primary mr-1 btn-sm">Edit</button></a>
                                    @endcan
                                    @can('delete-users')
                                    <form action="{{ route('admin.users.destroy',$user) }}" method="POST" >
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-warning mr-1 btn-sm">Delete</button>
                                    @endcan
                                    </form>
                                </td>
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

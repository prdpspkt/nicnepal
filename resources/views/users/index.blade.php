@extends('layouts.app')
@section('content')
    <div class="container">
<div class="row">
    <div class="col-md-12">
        <h3>Users</h3>
        <table class="table table-striped">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Admin</th>
                <th>Suspended</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->is_admin}}</td>
                    <td>{{$user->is_suspended}}</td>
                    <th><a class="btn btn-sm btn-success" href="/users/show/{{$user->id}}">View</a> </th>
                    <th><a class="btn btn-sm btn-primary" href="/users/edit/{{$user->id}}">Edit</a> </th>
                    <th><a class="btn btn-sm btn-danger" href="/users/delete/{{$user->id}}">Delete</a> </th>
                    <th></th>
                    <th></th>
                </tr>
            @endforeach
        </table>
    </div>
</div>
    </div>
    @stop
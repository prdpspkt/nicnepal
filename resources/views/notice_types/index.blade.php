@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Notice Types<a href="/notice_types/add" class="btn btn-sm btn-success float-right">Add a Type</a></h3>
                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @if($notice_types != null)
                    @foreach($notice_types as $notice)
                        <tr>
                            <td>{{$notice->name}}</td>
                            <td><a class="btn btn-sm btn-primary" href="/notice_types/edit/{{$notice->id}}">Edit</a> </td>
                            <td><a class="btn btn-sm btn-danger" href="/notice_types/delete/{{$notice->id}}">Delete</a> </td>
                        </tr>
                    @endforeach
                        @endif
                </table>
            </div>
        </div>
    </div>
@stop

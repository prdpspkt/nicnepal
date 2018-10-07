@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Notices<a href="/notices/add" class="btn btn-sm btn-success float-right">Add a Notice</a></h3>
                <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Notice Type</th>
                        <th>Published</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    @if($notices != null)
                    @foreach($notices as $notice)
                        <tr>
                            <td>{{$notice->title}}</td>
                            <td>{{$notice->description}}</td>
                            <td>{{$notice->notice_type}}</td>
                            <td>{{$notice->published}}</td>
                            <th><a class="btn btn-sm btn-success" href="/notices/show/{{$notice->id}}">View</a> </th>
                            <th><a class="btn btn-sm btn-primary" href="/notices/edit/{{$notice->id}}">Edit</a> </th>
                            <th><a class="btn btn-sm btn-danger" href="/notices/delete/{{$notice->id}}">Delete</a> </th>
                            <th></th>
                            <th></th>
                        </tr>
                    @endforeach
                        @endif
                </table>
            </div>
        </div>
    </div>
@stop

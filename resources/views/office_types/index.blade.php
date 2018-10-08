@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Office Types<a href="/office_types/add" class="btn btn-sm btn-success float-right">Add a Type</a></h3>
                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @if($office_types != null)
                    @foreach($office_types as $office)
                        <tr>
                            <td>{{$office->name}}</td>
                            <th><a class="btn btn-sm btn-primary" href="/office_types/edit/{{$office->id}}">Edit</a> </th>
                            <th><a class="btn btn-sm btn-danger" href="/office_types/delete/{{$office->id}}">Delete</a> </th>
                        </tr>
                    @endforeach
                        @endif
                </table>
            </div>
        </div>
    </div>
@stop

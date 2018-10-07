@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Company or Organization<a href="/companies/add" class="btn btn-sm btn-success float-right">Add a Company</a></h3>
                <table class="table table-striped">
                    <tr>
                        <th>logo</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    @if($companies != null)
                    @foreach($companies as $company)
                        <tr>
                            <td><img style="width: 50px; height: auto;" src="{{$company->logo}}"/></td>
                            <td>{{$company->name}}</td>
                            <td>{{$company->address}}</td>
                            <td>{{$company->phone}}</td>
                            <td>{{$company->email}}</td>
                            <th><a class="btn btn-sm btn-success" href="/companies/show/{{$company->id}}">View</a> </th>
                            <th><a class="btn btn-sm btn-primary" href="/companies/edit/{{$company->id}}">Edit</a> </th>
                            <th><a class="btn btn-sm btn-danger" href="/companies/delete/{{$company->id}}">Delete</a> </th>
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

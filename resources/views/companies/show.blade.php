@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img class="float-right" src="{{$company->logo}}" alt="">
            </div>
            <div class="col-md-10">
                <h3>{{$company->name}}</h3>
                <p>{{$company->address}}</p>
                <p>Phone: {{$company->phone}}</p>
                <p>e-mail: {{$company->email}}</p>
                <p>Fax: {{$company->fax}}</p>
            </div>
            <div class="col-md-12">
                <h4>About <a href="/companies/edit/{{$company->id}}" class="btn btn-sm btn-primary float-right">Edit</a></h4>
            </div>

            <div class="col-md-12">
                {!! $company->about !!}
            </div>


        </div>
    </div>
@stop

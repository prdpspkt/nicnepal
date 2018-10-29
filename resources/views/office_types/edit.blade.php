@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="row" method="post" action="/office_types/edit/{{$office_type->id}}">
            <div class="col-md-8">
                <h3>Update</h3>

                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                    <label>Name: </label>
                    <input class="form-control" type="text" value="{{$office_type->name}}" name="name" required>
                </div>

                <div class="form-group">
                    <label>Slug: </label>
                    <input class="form-control" type="text" name="slug" value="{{$office_type->slug}}" required>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-sm btn-success" required value="Update"/>
                </div>


            </div>
        </form>
    </div>

@stop

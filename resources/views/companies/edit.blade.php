@extends('layouts.app')

@section('content')
    <script src="/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'#content' });</script>
    <div class="container">
        <form class="row" method="post" action="/companies/edit/{{$company->id}}" enctype="multipart/form-data">
            <div class="col-md-8">
                <h3>Edit a Office | <small>{{$company->name}}</small></h3>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label>Office Type</label>
                    {!! Form::select('office_type_id', $office_types, $company->office_type_id, ['class' => 'form-control']) !!}

                </div>
                <div class="form-group">
                    <label>Name </label>
                    <input class="form-control" type="text" name="name" value="{{$company->name}}" required>
                </div>


                <div class="form-group">
                    <label>About Page: </label>
                    <textarea class="form-control" id="content" name="about">{{$company->about}}</textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-sm btn-success" required value="Update"/>
                </div>


            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="submit" class="btn btn-sm btn-success float-right" required value="Update"/>
                </div>
                <div class="form-group">
                    <label>address: </label>
                    <textarea name="address" class="form-control" required>{{$company->address}}</textarea>
                </div>
                <div class="form-group">
                    <label>Phone:</label>
                    <input type="text" class="form-control" required name="phone"
                          value="{{$company->phone}}"></textarea>
                </div>
                <div class="form-group">
                    <label>Fax:</label>
                    <input type="text" class="form-control" name="fax"
                           value="{{$company->fax}}"></textarea>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" class="form-control" name="email"
                           value="{{$company->email}}"></textarea>
                </div>
                <div class="form-group">
                    <label>Logo:</label>
                    <input type="file" class="form-control" name="logo"/>
                    <img src="{{$company->logo}}"/>
                </div>
            </div>
        </form>
    </div>

@stop

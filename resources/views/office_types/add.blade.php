@extends('layouts.app')

@section('content')
<script src="/tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'#content' });</script>
    <div class="container">
       <form class="row" method="post" action="/office_types/add">
            <div class="col-md-8">
                <h3>Add Office Type</h3>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <label>Name: </label>
                        <input class="form-control" type="text" name="name" placeholder="office type" required>
                    </div>

                   <div class="form-group">
                     <input type="submit" class="btn btn-sm btn-success" required value="Add"/>
            </div>


            </div>
</form>
    </div>

@stop

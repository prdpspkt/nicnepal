@extends('layouts.app')

@section('content')
<script src="/tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'#content' });</script>
    <div class="container">
       <form class="row" method="post" action="/companies/add" enctype="multipart/form-data">
            <div class="col-md-8">
                <h3>Add a Company</h3>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <label>Name </label>
                        <input class="form-control" type="text" name="name" placeholder="Name of Organization" required>
                    </div>


                    <div class="form-group">
                        <label>About Page: </label>
                        <textarea class="form-control" id="content" name="about"></textarea>
                    </div>

                   <div class="form-group">
                     <input type="submit" class="btn btn-sm btn-success" required value="Add"/>
            </div>


            </div>
            <div class="col-md-4">
                <div class="form-group">
                     <input type="submit" class="btn btn-sm btn-success float-right" required value="Add"/>
            </div>
                <div class="form-group">
                        <label>Address: </label>
                        <textarea name="address" class="form-control" required
                                  placeholder="Complete Company Address"></textarea>
                    </div>
                <div class="form-group">
                    <label>Phone:</label>
                    <input type="text" class="form-control" required name="phone"
                           placeholder="Company Phone"></textarea>
                </div>
                <div class="form-group">
                    <label>Fax:</label>
                    <input type="text" class="form-control" name="fax"
                           placeholder="Company Fax"></textarea>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" class="form-control" name="email"
                           placeholder="Company emails"></textarea>
                </div>
                <div class="form-group">
                    <label>Logo:</label>
                    <input type="file" class="form-control" name="logo"/>
                </div>
            </div>
</form>
    </div>

@stop

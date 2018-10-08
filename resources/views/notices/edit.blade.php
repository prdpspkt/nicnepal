@extends('layouts.app')
@section('content')
    <script src="/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector: '#content'});</script>
    <div class="container">
        <form class="row" method="post" action="/notices/edit/{{$notice->id}}">
            <div class="col-md-12">
                <h3>Edit notice</h3>
            </div>
            <div class="col-md-8">

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label>Organization: </label>
                    {!! Form::select('company_id', $offices, $notice->company_id, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>Title: </label>
                    <input class="form-control" type="text" name="title" value="{{$notice->title}}" required>
                </div>


                <div class="form-group">
                    <label>Content: </label>

                    <textarea id="content" class="form-control" required name="content">{{$notice->content}}
                        </textarea>
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-sm btn-success" required value="Update"></input>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="submit" class="btn btn-sm btn-success float-right" required value="Update"></input>
                </div>
                <div class="form-group">
                    <label>Information Type: </label>
                    {!! Form::select('notice_type_id', $notice_types,$notice->notice_type_id, ['class' => 'form-control']) !!}

                </div>

                    <div class="form-group">
                        <label>Description: </label>
                        <textarea name="description" class="form-control" required>{{$notice->description}}
                        </textarea>
                    </div>

                <div class="form-group">
                    <label>Published:</label>
                    <input type="text" class="form-control" required name="published"
                           value="{{$notice->published}}"></textarea>
                </div>
                <div class="form-group">
                    <label>Web Url </label>
                    <input type="text" class="form-control" name="notice_url"
                           value="{{$notice->notice_url}}"></textarea>
                </div>
            </div>
        </form>
    </div>

@stop

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Notices</h3>
                <a href="/notices" class="btn btn-sm btn-primary float-right">Back</a>
                <h2 class="text-center">
                    {{$notice->title}}
                </h2>
                <div class="text-right">
                	{{$notice->published}}
                </div>
                <p>{!! $notice->content !!}</p>
            </div>
        </div>
    </div>
@stop
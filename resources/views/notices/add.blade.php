@extends('layouts.app')

@section('content')
<script src="/tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'#content' });</script>
    <div class="container">
       <form class="row" method="post" action="/notices/add">
            <div class="col-md-8">
                <h3>Add a new notice</h3>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label>Organization: </label>
                    </div>
                    <div class="form-group">
                        <label>Title: </label>
                        <input class="form-control" type="text" name="title" placeholder="title of notice" required>
                    </div>


                    <div class="form-group">
                        <label>Content: </label>
                        <textarea class="form-control" id="content" name="content"></textarea>
                    </div>

                   <div class="form-group">
                     <input type="submit" class="btn btn-sm btn-success" required value="Publish"/>
            </div>


            </div>
            <div class="col-md-4">
                <div class="form-group">
                     <input type="submit" class="btn btn-sm btn-success float-right" required value="Publish"/>
            </div>
                <div class="form-group">
                    <label>Information Type: </label>
                    <select name="notice_type" class="form-control" required>
                        <option>Select notice type</option>
                        <option value="public_welfare">Public Welfare</option>
                        <option value="job_offers">Vacancy/Job</option>
                        <option value="tender_notice">Tenders</option>
                        <option value="press_release">Press Release</option>
                        <option value="promotional_offers">Promotional Offers</option>
                        <option value="events">Public Events</option>
                        <option value="foreign_employment">Foreign Employment</option>

                    </select>
                </div>
                <div class="form-group">
                        <label>Description: </label>
                        <textarea name="description" class="form-control" required
                                  placeholder="At most 150 characters"></textarea>
                    </div>
                <div class="form-group">
                    <label>Published:</label>
                    <input type="text" class="form-control" required name="published"
                           placeholder="published date"></textarea>
                </div>
                <div class="form-group">
                    <label>Notice Url </label>
                    <input type="text" class="form-control" name="notice_url"
                           placeholder="Link to notice if already published online"></textarea>
                </div>
            </div>
</form>
    </div>

@stop

@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class=" panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success"> {{ Session::get('message') }}</h3>
                    <form action="{{ route('new-band') }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3"> Band Name</label>

                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" name="band_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> Band Description</label>

                            <div class="form-group col-md-9">
                                <textarea class="form-control" name="band_description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">publication status</label>

                            <div class="form-group col-md-9">
                                <label> <input type="radio" name="publication_status" value="1">Published</label>
                                <label> <input type="radio" name="publication_status" value="0">Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"></label>
                            <div class="form-group col-md-9">
                                <input type="submit" value="Save Band Info" class="btn btn-success btn-block" name="btn">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
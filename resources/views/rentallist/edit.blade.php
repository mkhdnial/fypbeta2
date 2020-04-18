@extends('layouts.main')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Rental List</div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{ url('/owner/'. $owner->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('put') }}

                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{$owner->name}}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Item</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
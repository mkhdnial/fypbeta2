  @extends('layouts.main')
@section('content')

 <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Rental List</div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{ url('/owner/'. $rentalList->id) }}">
                            {{ csrf_field() }}

                            {{ method_field('put') }}

                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $lists->name }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Availability</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="1" name="is_done"> Available
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="0" name="is_done"> Not Available
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update List</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
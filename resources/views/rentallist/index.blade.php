@extends('layouts.main')
@section('content')
   <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Rental List</div>
                    <div class="panel-body">
                        <a href="{{ url('owner/create') }}" class="btn btn-primary">Add Item</a>

                        <br>
                        <br>
                        <br>

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Availability</th>
                                    <th>Action</th>
                                </tr>

                                @if(! count($rentalList))
                                    <tr>
                                        <td colspan="3">No Item</td>
                                    </tr>
                                @endif
                                @foreach($rentalList as $lists)
                                    <tr>
                                        <td>{{ $lists->id }}</td>
                                        <td>{{ $lists->name }}</td>
                                        <td>Status</td>
                                        <td>
                                            <a href="{{url('owner/'.$lists->id.'/edit')}}" class="btn btn-primary">Edit</a>
                                             <a href="{{url('owner/'.$lists->id.'/delete')}}" class="btn btn-danger">Delete</a>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
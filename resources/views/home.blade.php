@extends('layouts.app')

@section('content')

    <div class="col-md-12">
        <div class="box box-primary">
            <form action="{{route('testtakers')}}" method="get" novalidate="novalidate" role="form">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter URL for all users</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter url">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection

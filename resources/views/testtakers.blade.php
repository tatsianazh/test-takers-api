@extends('layouts.app')

@section('content')

    <section class="content">
        <div>
            <button type="button" class="pull-left btn btn-success"><a href="{{route('home')}}">Home</a></button>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">List of test-takers</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>login</th>
                                <th>password</th>
                                <th>title</th>
                                <th>lastname</th>
                                <th>firstname</th>
                                <th>gender</th>
                                <th>email</th>
                                <th>picture</th>
                                <th>address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection

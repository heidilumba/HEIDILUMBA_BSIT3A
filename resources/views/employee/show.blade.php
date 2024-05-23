@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class = "container">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-info">
                    Employee Table
                    </div>

                    <div class="card">
                        <div class="card-body p-0">
                               
                            <table class="table ">
                                <thead >
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                     
                                        <th>Last Name</th>
                                       
                                        <th>Date of Birth</th>  
                                        <th>Phone</th>
                                      
                                </thead>
                                <tbody>
                                @foreach($employ as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->first_name }}</td>
                                        <td>{{ $data->last_name }}</td>
                                        <td>{{ $data->DOB}}</td>
                                        <td>{{ $data->phone }}</td>
                                       
                                       
                                  
                                        <td scope="col">

                            <a href="{{ url('employee/'.$data->id.'/edit')}}">
                            <button style="background-color:gray; color:white;" class="btn btn-info btn-sm">
                            <i  class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </button>
                            </a>

                                </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                       
                    </div>

            </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->



</div>
    <!-- /.content -->
@endsection
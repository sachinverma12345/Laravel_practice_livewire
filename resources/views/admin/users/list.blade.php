@extends('layouts.admin.master')
@section('page-title', 'Users')
@section('section')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome!</h4>
                        <span class="ml-1">Users</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Users</h4>
                        </div>
                        <div class="card-body">

                            @if (session('success'))
                                <div class="col-sm-12">
                                    <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone No</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(filled($users))
                                        @foreach ($users as $key=>$room)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$room->name}}</td>
                                            <td>{{$room->email}}</td>
                                            <td>{{$room->phone_no}}</td>
                                            <td>
                                                <a href="#" class="text-success"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="text-danger"><i class="fa fa-remove"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                       
                                        @else
                                        <tr>
                                            <th colspan="5">Records not Found</th>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        $(document).ready(function() {
            const route = "#";
            $('.dataTables_filter').append(`<a href="${route}" class="btn btn-primary ml-2">Add</a>`);
        });
    </script>
@stop

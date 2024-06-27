@extends('layouts.admin.master')
@section('page-title', 'add-edit')
@section('section')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome!</h4>
                        <span class="ml-1">Add-Edit Rooms</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Rooms</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add-Edit</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon" enctype="multipart/form-data" action="{{route('rooms.store')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="room_id">Room ID</label>
                                                <input type="text" class="form-control" id="room_id" name="room_id"
                                                    placeholder="Enter Room ID">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="room_type">Room Type</label>
                                                <select name="room_type" class="form-control" id="">
                                                    <option value=""> Select Type</option>
                                                    <option value="standard">Standard</option>
                                                    <option value="deluxe">Deluxe</option>
                                                    <option value="suite">Suite</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="room_number">Room Number</label>
                                                <input type="text" class="form-control" id="room_number"
                                                    name="room_number" placeholder="Enter Room Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="floor">Room Floor</label>
                                                <input type="text" class="form-control" id="floor" name="floor"
                                                    placeholder="Enter Room Floor">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="room_capicity">Room Capicity</label>
                                                <input type="text" class="form-control" id="room_capicity"
                                                    name="room_capicity" placeholder="Enter Room Capicity">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="price_per_night">Price Per Night</label>
                                                <input type="text" class="form-control" id="price_per_night"
                                                    name="price_per_night" placeholder="Enter Price Per Night">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="availability">Availability</label>
                                                <input type="text" class="form-control" id="availability"
                                                    name="availability" placeholder="Enter Availability">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="last_cleaned">Last Cleaned</label>
                                                <input type="text" class="form-control" id="last_cleaned"
                                                    name="last_cleaned" placeholder="Enter Last Cleaned">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="last_maintenance">Last Maintenance</label>
                                                <input type="text" class="form-control" id="last_maintenance"
                                                    name="last_maintenance" placeholder="Enter Last Maintenance">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="image">Image</label>
                                                <input type="file" multiple class="form-control" id="image"
                                                    name="image[]" >
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="description">Description</label>
                                                <textarea type="text" class="form-control summernote" id="description" name="description"
                                                    placeholder="Enter Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

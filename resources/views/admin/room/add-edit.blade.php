@extends('layouts.admin.master')
@section('page-title', 'add-edit')
@section('section')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome!</h4>
                        <span class="ml-1">{{ $edit ? 'Edit' : 'Add' }} Rooms</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('rooms.index') }}">Rooms</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $edit ? 'Edit' : 'Add' }}</a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon" enctype="multipart/form-data"
                                    action="{{ $edit ? route('rooms.update', $room) : route('rooms.store') }}"
                                    method="post">
                                    @if ($edit)
                                        @method('PUT')
                                    @endif
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="room_id">Title</label>
                                                <input type="text" value="{{ old('title', $edit ? $room->title : '') }}"
                                                    class="form-control" id="title" name="title"
                                                    placeholder="Enter Title">
                                                <x-input-error :messages="$errors->get('title')" class="mt-2 text-danger" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="room_type">Room Type</label>
                                                <select name="room_type" class="form-control" id="">
                                                    <option value=""> Select Type</option>
                                                    <option value="villa"
                                                        {{ $edit && $room->room_type == 'villa' ? 'selected' : '' }}>Villa
                                                    </option>
                                                    <option value="standard"
                                                        {{ $edit && $room->room_type == 'standard' ? 'selected' : '' }}>
                                                        Standard</option>
                                                    <option value="family"
                                                        {{ $edit && $room->room_type == 'family' ? 'selected' : '' }}>Family
                                                    </option>
                                                </select>
                                                <x-input-error :messages="$errors->get('room_type')" class="mt-2 text-danger" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="room_id">Room ID</label>
                                                <input type="text"
                                                    value="{{ $edit ? $room->room_id : random_int(100000, 900000) }}"
                                                    class="form-control" id="room_id" name="room_id"
                                                    placeholder="Enter Room ID">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="room_number">Room Number</label>
                                                <input type="text" class="form-control" id="room_number"
                                                    name="room_number"
                                                    value="{{ old('room_number', $edit ? $room->room_number : '') }}"
                                                    placeholder="Enter Room Number">
                                            </div>
                                            <x-input-error :messages="$errors->get('room_number')" class="mt-2 text-danger" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="floor">Room Floor</label>
                                                <input type="text" class="form-control"
                                                    value="{{ old('floor', $edit ? $room->floor : '') }}" id="floor"
                                                    name="floor" placeholder="Enter Room Floor">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="room_capicity">Room Capicity</label>
                                                <input type="text" class="form-control"
                                                    value="{{ old('room_capicity', $edit ? $room->room_capicity : '') }}"
                                                    id="room_capicity" name="room_capicity"
                                                    placeholder="Enter Room Capicity">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="price_per_night">Price Per Night</label>
                                                <input type="text" class="form-control"
                                                    value="{{ old('price_per_night', $edit ? $room->price_per_night : '') }}"
                                                    id="price_per_night" name="price_per_night"
                                                    placeholder="Enter Price Per Night">
                                                <x-input-error :messages="$errors->get('price_per_night')" class="mt-2 text-danger" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="availability">Availability</label>
                                                <select name="availability" class="form-control" id="">
                                                    <option value="">select availability</option>
                                                    <option value="1"
                                                        {{ $edit && $room->availability == 1 ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="0"
                                                        {{ $edit && $room->availability == 0 ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                                <x-input-error :messages="$errors->get('room_type')" class="mt-2 text-danger" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="last_cleaned">Last Cleaned</label>
                                                <input type="date" class="form-control"
                                                    value="{{ old('last_cleaned', $edit ? $room->last_cleaned : '') }}"
                                                    id="last_cleaned" name="last_cleaned"
                                                    placeholder="Enter Last Cleaned">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="last_maintenance">Last Maintenance</label>
                                                <input type="date" class="form-control"
                                                    value="{{ old('last_maintenance', $edit ? $room->last_maintenance : '') }}"
                                                    id="last_maintenance" name="last_maintenance"
                                                    placeholder="Enter Last Maintenance">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2 mb-2">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" name="is_wifi"
                                                            {{ $edit && $room->is_wifi == 1 ? 'selected' : '' }}
                                                            class="form-check-input" value="">WIFI
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" name="is_cark_park"
                                                            {{ $edit && $room->is_cark_park == 1 ? 'selected' : '' }}
                                                            class="form-check-input" value="">Car Park
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" name="is_tv"
                                                            {{ $edit && $room->is_tv == 1 ? 'selected' : '' }}
                                                            class="form-check-input" value="">Telivison
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" name="is_fridge"
                                                            {{ $edit && $room->is_fridge == 1 ? 'selected' : '' }}
                                                            class="form-check-input" value="">Fridge
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="image">Banner Image</label>
                                                <input type="file" multiple class="form-control" id="room_banner"
                                                    name="room_banner">
                                                @if ($edit)
                                                    <img src="{{ asset('/storage/app/public/' . $room->room_banner) }}"
                                                        style="height: 150px;width:200px" alt="dfg">
                                                @endif
                                                <x-input-error :messages="$errors->get('room_banner')" class="mt-2 text-danger" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="image">Room Gallery Image</label>
                                                <input type="file" multiple class="form-control" id="image"
                                                    name="image[]">
                                                <x-input-error :messages="$errors->get('image')" class="mt-2 text-danger" />
                                                @if ($edit && filled($room->galleries))
                                                    @foreach ($room->galleries as $gallery)
                                                        <img style="height:100px; width:150px; padding:2px"
                                                            alt="Gallery Image Not Found"
                                                            src="{{ asset('/storage/app/public/' . $gallery->path) }}"
                                                            placeholdertype="hotel" class="child_gallery"
                                                            itemprop="image" lazyload="true">
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="description">Description</label>
                                                <textarea type="text" class="form-control summernote" id="description" name="description"
                                                    placeholder="Enter Description">{{ old('description', $edit ? $room->description : '') }}</textarea>
                                                <x-input-error :messages="$errors->get('description')" class="mt-2 text-danger" />
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

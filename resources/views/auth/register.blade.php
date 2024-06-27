@extends('layouts.web.master')
@section('page-title', 'registration')
@section('section')
    <!-- banner -->
    <section class="banner_main">
        <img class="first-slide" src="{{ asset('public/web/images/banner1.jpg') }}" alt="First slide">
        <div class="booking_ocline">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="book_room">
                            <h1>Register</h1>
                            <form class="book_now" action="{{route('register')}}" method="POST">
                                 @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Name</span>
                                        <input class="online_book" type="name" name="name" value="{{old('name')}}" required autofocus placeholder="Enter Name" >
                                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />

                                    </div>
                                    <div class="col-md-4">
                                        <span>Email</span>
                                        <input class="online_book" type="email" name="email" value="{{old('email')}}" required autofocus placeholder="Enter Email" >
                                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

                                    </div>
                                    <div class="col-md-4">
                                        <span>Phone</span>
                                        <input class="online_book" type="phone" name="phone" value="{{old('phone')}}" required autofocus placeholder="Enter Phone" >
                                        <x-input-error :messages="$errors->get('phone')" class="mt-2 text-danger" />

                                    </div>
                                    <div class="col-md-4">
                                        <span>Address</span>
                                        <input class="online_book" type="address" name="address" value="{{old('address')}}" required autofocus placeholder="Enter Address" >
                                        <x-input-error :messages="$errors->get('address')" class="mt-2 text-danger" />

                                    </div>
                                    <div class="col-md-4">
                                        <span>Password</span>
                                        <input class="online_book" type="password" name="password" required autocomplete="current-password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                                    </div>
                                    <div class="col-md-4">
                                        <span>Confirm Password</span>
                                        <input class="online_book" type="password" name="password_confirmation" required autocomplete="current-password">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                                    </div>
                                    <div class="col-md-12">
                                        <button class="book_btn">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

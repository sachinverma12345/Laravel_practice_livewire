@extends('layouts.web.master')
@section('page-title', 'login')
@section('section')
    <!-- banner -->
    <section class="banner_main">
        <img class="first-slide" src="{{ asset('public/web/images/banner1.jpg') }}" alt="First slide">
        <div class="booking_ocline">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-5">
                        <div class="book_room">
                            <h1>Login</h1>
                            <form class="book_now" action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <span>Email</span>
                                        <input class="online_book" type="email" name="email" value="{{old('email')}}" required autofocus placeholder="Enter Email" autocomplete="username">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

                                    </div>
                                    <div class="col-md-12">
                                        <span>Password</span>
                                        <input class="online_book" type="password" name="password" required autocomplete="current-password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
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

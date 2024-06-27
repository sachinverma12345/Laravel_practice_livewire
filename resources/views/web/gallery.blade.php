@extends('layouts.web.master')
@section('page-title','gallery')
@section('section')
<div class="back_re">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="title">
               <h2>gallery</h2>
             </div>
          </div>
       </div>
    </div>
 </div>
  <!-- gallery -->
 <div  class="gallery">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>gallery</h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset('public/web/images/banner2.jpeg')}}" style="height:224px;width:298px" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset('public/web/images/gallery2.jpg')}}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset('public/web/images/gallery5.jpeg')}}" style="height:224px;width:298px" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset('public/web/images/gallery.jpeg')}}" style="height:224px;width:298px" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset('public/web/images/gallery2.jpeg')}}" style="height:224px;width:298px" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset('public/web/images/gallery3.jpeg')}}" style="height:224px;width:298px" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset('public/web/images/gallery7.jpg')}}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset('public/web/images/gallery4.jpeg')}}" style="height:224px;width:298px" alt="#"/></figure>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end gallery -->
 @stop
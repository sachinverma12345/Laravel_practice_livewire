@extends('layouts.web.master')
@section('page-title','Home')
@section('section')
<div class="back_re">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="title">
                 <h2>Our Services</h2>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- blog -->
 <div  class="blog">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
               
                <p class="margin_0">Anavamoana Restaurant</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-4">
             <div class="blog_box">
                <div class="blog_img">
                   <figure><img src="{{ asset('public/web/images/food.jpg')}}" alt="#"/></figure>
                </div>
                <div class="blog_room">
                  <span>Anavamoana Restaurant</span>
                   <p>We are delighted to introduce our newest addition to the hotel experience - a vibrant and diverse restaurant that caters to all your culinary desires. At our hotel, we understand that every guest has unique tastes, which is why our restaurant offers an extensive menu featuring a wide range of flavors and cuisines. Whether you're a fan of savory classics, exotic dishes, or have specific dietary preferences, our talented chefs are committed to crafting delectable meals that will tantalize your taste buds. Anavamoana, where we invite you to be part of our story of resilience and renewal. </p>
                </div>
             </div>
          </div>
          <div class="col-md-4">
             <div class="blog_box">
                <div class="blog_img">
                   <figure><img src="{{ asset('public/web/images/rest2.jpg')}}" alt="#"/></figure>
                </div>
                <div class="blog_room">
                   <span>Catering Service </span>
                   <p>Our hotel is not just a destination for your regular stays; it's also the perfect venue for your special occasions and corporate events. Whether you're celebrating a birthday, planning a dream wedding, or organizing a crucial corporate gathering, we have you covered. Our well-equipped conference rooms provide the ideal space for productive meetings and presentations, while our versatile event spaces can be transformed to host memorable shows and celebrations. With an array of amenities and a dedicated team to assist with event planning and coordination.</p>
                </div>
             </div>
          </div>
          <div class="col-md-4">
             <div class="blog_box">
                <div class="blog_img">
                   <figure><img src="{{ asset('public/web/images/caterin1.jpg')}}" alt="#"/></figure>
                </div>
                <div class="blog_room">
                   <span>Anavamoana Restaurant </span>
                   <p> We ensure that your special day or corporate event is executed flawlessly. Choose our hotel to turn your important moments into unforgettable experiences.Join us for an unforgettable dining experience where you can savor a world of flavors right here at our hotel.Your presence here is a celebration of our dedication to excellence, and we look forward to exceeding your expectations during your stay with us. Discover the paradise and gem of Samoa at Anavamoana - your home away from home  this hotel and embarked on a journey to restore it to its former glory. </p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end blog -->
@stop
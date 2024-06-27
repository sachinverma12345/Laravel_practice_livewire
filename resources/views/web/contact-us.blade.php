@extends('layouts.web.master')
@section('page-title','Home')
@section('section')
<div class="back_re">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="title">
                 <h2>Contact Us</h2>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!--  contact -->
 <div class="contact">
    <div class="container">
       <div class="row">
          <div class="col-md-6">
             <form id="request" class="main_form">
                <div class="row">
                   <div class="col-md-12 ">
                      <input class="contactus" placeholder="Name" type="type" name="Name"> 
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Email" type="type" name="Email"> 
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                   </div>
                   <div class="col-md-12">
                      <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                   </div>
                   <div class="col-md-12">
                      <button class="send_btn">Send</button>
                   </div>
                </div>
             </form>
          </div>
          <div class="col-md-6">
             <div class="map_main">
                <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15497.339912516254!2d-171.805328!3d-13.818913000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71a51459f5938adb%3A0xcb9864e465a59f62!2s55JV%2BCVM%2C%20Vaitele%2C%20Samoa!5e0!3m2!1sen!2sus!4v1714443621179!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end contact -->
@stop
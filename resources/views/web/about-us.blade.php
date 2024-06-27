@extends('layouts.web.master')
@section('page-title', 'about-us')
@section('section')
    <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about -->
    <div class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="titlepage" style="max-width: 100%;">
                        <h2>About Us</h2>
                        <p>Welcome to Anavamoana, a place where resilience and dedication have breathed new life into what was once known as the Moanalisa Hotel. In the face of adversity, Anavamoana emerged as a testament to the unwavering spirit of revival, symbolizing the toil and tears shed by the resilient team behind its transformation.

                            In the wake of the global pandemic, the Moanalisa Hotel faced unprecedented challenges and was temporarily closed. However, a beacon of hope and renewal emerged in the form of a dedicated and passionate organization known as SISDAC (Samoa Independent Seventh-Day Adventist Church). This faith-driven group recognized the potential of this charming hotel and embarked on a journey to restore it to its former glory.
                            
                            The name “Anavamoana” translates to “Hands and Tears” in Samoan, a poignant expression that encapsulates the relentless effort and determination that went into the revival of this establishment. It signifies the countless hours of hard work, the shared tears of adversity, and the hands that labored tirelessly to bring Anavamoana back to life. At Anavamoana, we have meticulously refurbished and upgraded our facilities to provide you with a world-class experience that reflects the true essence of Samoa. We invite you to indulge in the beauty and paradise that Samoa has to offer, all while enjoying the warm hospitality and exceptional service that Anavamoana is renowned for.
                            </p>
                        <a class="read_more" href="Javascript:void(0)"> Read More</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about_img" style="margin-top: 97px;">
                        <figure><img src="{{ asset('public/web/images/about.jpeg') }}" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
@stop

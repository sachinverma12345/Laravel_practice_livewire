@extends('layouts.web.master')
@section('page-title', 'Home')
@section('section')
    <!-- banner -->
    <section class="banner_main">
        <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{ asset('public/web/images/banner_new1.jpg') }}" alt="First slide">
                    <div class="container">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{ asset('public/web/images/banner_new2.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{ asset('public/web/images/banner_new5.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="{{ asset('public/web/images/banner_new3.jpg') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="booking_ocline">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="book_room">
                            <h1>Book a Room Online</h1>
                            <form class="book_now">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span>Arrival</span>
                                        <img class="date_cua" src="{{ asset('public/web/images/date.png') }}">
                                        <input class="online_book" placeholder="dd/mm/yyyy" type="date"
                                            name="dd/mm/yyyy">
                                    </div>
                                    <div class="col-md-12">
                                        <span>Departure</span>
                                        <img class="date_cua" src="{{ asset('public/web/images/date.png') }}">
                                        <input class="online_book" placeholder="dd/mm/yyyy" type="date"
                                            name="dd/mm/yyyy">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="book_btn">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- about -->
    <div class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="titlepage" style="max-width: 100%;">
                        <h2>About Us</h2>
                        <p>Welcome to Anavamoana, a place where resilience and dedication have breathed new life into what
                            was once known as the Moanalisa Hotel. In the face of adversity, Anavamoana emerged as a
                            testament to the unwavering spirit of revival, symbolizing the toil and tears shed by the
                            resilient team behind its transformation.

                            In the wake of the global pandemic, the Moanalisa Hotel faced unprecedented challenges and was
                            temporarily closed. However, a beacon of hope and renewal emerged in the form of a dedicated and
                            passionate organization known as SISDAC (Samoa Independent Seventh-Day Adventist Church). This
                            faith-driven group recognized the potential of this charming hotel and embarked on a journey to
                            restore it to its former glory.

                            The name “Anavamoana” translates to “Hands and Tears” in Samoan, a poignant expression that
                            encapsulates the relentless effort and determination that went into the revival of this
                            establishment. It signifies the countless hours of hard work, the shared tears of adversity, and
                            the hands that labored tirelessly to bring Anavamoana back to life. At Anavamoana, we have
                            meticulously refurbished and upgraded our facilities to provide you with a world-class
                            experience that reflects the true essence of Samoa. We invite you to indulge in the beauty and
                            paradise that Samoa has to offer, all while enjoying the warm hospitality and exceptional
                            service that Anavamoana is renowned for.
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
    <!-- our_room -->
    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Room</h2>
                        {{-- <p>Lorem Ipsum available, but the majority have suffered </p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('public/web/images/villa.jpg') }}" style="height:224px;width:386px"
                                    alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Villa</h3>
                            <p style="text-align: justify">Our Villa accommodation is perfect for those seeking a spacious and luxurious retreat. Designed for 1 to 2 persons, it offers a serene and private environment for a tranquil getaway. However, for those who wish to expand their group, our Villa can be extended to accommodate up to 3 guests at a special rate of only 185 Tala. Whether you're seeking a romantic escape or a family vacation, our Villa provides an exquisite setting with ample room to relax and unwind, ensuring a memorable stay without compromising on comfort or style. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img style="height: 226px;" src="{{ asset('public/web/images/stand.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Standard</h3>
                            <p style="text-align: justify">Our standard room offer is designed to accommodate 1 to 2 persons comfortably, providing a cozy and welcoming space for a relaxing stay. However, for those looking to maximize occupancy, we offer the flexibility to accommodate up to 3 guests in the same room for an unbeatable rate . Whether you're traveling solo, as a couple, or with a small group, our standard room ensures a comfortable and budget-friendly experience, allowing you to enjoy all the amenities and convenience of our establishment without breaking the bank. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img style="height: 226px;"  src="{{ asset('public/web/images/gallery4.jpeg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Family</h3>
                            <p style="text-align: justify">Our Family Villa is a unique offering that consists of two conjoined Villas, specially designed to cater to the needs of a family of 4. Each Villa is spacious and luxurious, accommodating 1 to 2 persons comfortably, allowing parents and children to have their own private space. However, this special arrangement allows families to stay together while still enjoying the privacy and comfort of their own Villa. For those seeking a family vacation combines togetherness with personal space, our Family Villa is the ideal choice. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('public/web/images/bad1.jpeg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Bed Room</h3>
                            <p style="text-align: justify">All at an attractive rate of just 185 Tala. Enjoy a memorable family getaway in style and convenience. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('public/web/images/room5.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Bed Room</h3>
                            <p style="text-align: justify">Our commitment to your comfort and satisfaction is unwavering.We have carefully curated an atmosphere  </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('public/web/images/room6.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Bed Room</h3>
                            <p style="text-align: justify">Your presence here is a celebration of our dedication to excellence, we look forward to exceeding your expectations during your stay with us. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end our_room -->
    <!-- gallery -->
    {{-- <div class="gallery">
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
                        <figure><img src="{{ asset('public/web/images/banner2.jpeg') }}" style="height:224px;width:298px"
                                alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('public/web/images/gallery2.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('public/web/images/gallery5.jpeg') }}"
                                style="height:224px;width:298px" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('public/web/images/gallery.jpeg') }}" style="height:224px;width:298px"
                                alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('public/web/images/gallery2.jpeg') }}"
                                style="height:224px;width:298px" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('public/web/images/gallery3.jpeg') }}"
                                style="height:224px;width:298px" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('public/web/images/gallery7.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('public/web/images/gallery4.jpeg') }}"
                                style="height:224px;width:298px" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end gallery -->
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">

                        <p class="margin_0">Our Services</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="{{ asset('public/web/images/food.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <span>Anavamoana Restaurant</span>
                            <p>We are delighted to introduce our newest addition to the hotel experience - a vibrant and
                                diverse restaurant that caters to all your culinary desires. At our hotel, we understand
                                that every guest has unique tastes, which is why our restaurant offers an extensive menu
                                featuring a wide range of flavors and cuisines. Whether you're a fan of savory classics,
                                exotic dishes, or have specific dietary preferences, our talented chefs are committed to
                                crafting delectable meals that will tantalize your taste buds. Anavamoana, where we invite
                                you to be part of our story of resilience and renewal. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="{{ asset('public/web/images/rest2.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <span>Catering Service </span>
                            <p>Our hotel is not just a destination for your regular stays; it's also the perfect venue for
                                your special occasions and corporate events. Whether you're celebrating a birthday, planning
                                a dream wedding, or organizing a crucial corporate gathering, we have you covered. Our
                                well-equipped conference rooms provide the ideal space for productive meetings and
                                presentations, while our versatile event spaces can be transformed to host memorable shows
                                and celebrations. With an array of amenities and a dedicated team to assist with event
                                planning and coordination.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="{{ asset('public/web/images/caterin1.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <span>Anavamoana Restaurant </span>
                            <p> We ensure that your special day or corporate event is executed flawlessly. Choose our hotel
                                to turn your important moments into unforgettable experiences.Join us for an unforgettable
                                dining experience where you can savor a world of flavors right here at our hotel.Your
                                presence here is a celebration of our dedication to excellence, and we look forward to
                                exceeding your expectations during your stay with us. Discover the paradise and gem of Samoa
                                at Anavamoana - your home away from home this hotel and embarked on a journey to restore it
                                to its former glory. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->
    <!--  contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
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

@extends('layouts.web.master')
@section('page-title', 'login')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@800&family=Poppins&display=swap');

    .container-fluid {
        position: relative;
        overflow-y: auto
    }

    .container-fluid::-webkit-scrollbar {
        width: 6px;
        border-radius: 3px
    }

    .container-fluid::-webkit-scrollbar-thumb {
        background-color: #ffa500;
        border-radius: 3px
    }

    .container-fluid.bg-sec-light {
        background-color: #e7e7e7
    }


    #navbar-toggler-icon.click {
        position: absolute;
        left: 210px;
        top: 0;
        background-color: #747474
    }

    #navbar-toggler-icon.click span:before {
        content: '\f00d'
    }

    .sidebar {
        position: absolute;

        background-color: #161616;
        color: #fff;
        transform: translateX(-100%) scale(0);
        left: 0;
        transition: transform .2s ease-in-out
    }

    .sidebar.show {
        transform: translateX(0%) scale(1)
    }

    #side-nav {
        float: left;
        width: 18%
    }

    #content {
        width: 100%;
        padding: 30px
    }

    /* a {
    text-decoration: none;
    color: #222
} */

    #content .user-select-none {
        user-select: none
    }


    /* nav ul li a {
    color: #e5e5e5;
    text-decoration: none;
    display: block;
    width: 100%;
    padding-left: 20px;
    border-left: 4px solid transparent
} */

    /* nav ul li a:hover {
    color: #fff;
    background-color: #2e2e2e
} */

    /* nav ul li.active a {
    color: #ffff;
    background-color: #747474;
    border-left: 4px solid #ffa500
} */

    .fa-phone {
        transform: rotate(90deg)
    }

    .location input[type="text"] {
        max-width: 200px;
        border-radius: 0px;
        border: 1px solid #444
    }

    .location input[type="text"]::placeholder {
        color: #444
    }

    .location input[type="text"]:focus,
    input[type="submit"]:focus {
        box-shadow: none
    }

    input[type="submit"] {
        border-radius: 0;
        width: 120px
    }

    .box {
        padding: 10px
    }

    .btn:focus {
        box-shadow: none
    }

    .box-label {
        color: #11698e;
        font-size: 0.9rem;
        font-weight: 800
    }

    .box-label .btn {
        padding: 0;
        font-size: 0.8rem
    }

    label {
        cursor: pointer
    }

    .tick {
        display: block;
        position: relative;
        padding-left: 23px;
        cursor: pointer;
        font-size: 0.9rem;
        margin: 0
    }

    .tick input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0
    }

    .check {
        position: absolute;
        top: 1px;
        left: 0;
        height: 18px;
        width: 18px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 3px
    }

    .tick:hover input~.check {
        background-color: #f3f3f3
    }

    .tick input:checked~.check {
        background-color: #ffffff
    }

    .check:after {
        content: "";
        position: absolute;
        display: none
    }

    .tick input:checked~.check:after {
        display: block;
        transform: rotate(45deg) scale(1)
    }

    .tick .check:after {
        left: 6px;
        top: 2px;
        width: 5px;
        height: 10px;
        border: solid rgb(0, 0, 0);
        border-width: 0 3px 3px 0;
        transform: rotate(45deg) scale(2)
    }

    .hotel .hotel-img {
        width: 200px;
        object-fit: contain
    }

    .hotel .name {
        font-size: 1.2rem;
        font-weight: 700
    }

    .hotel .name .city {
        font-weight: normal;
        font-size: 0.85rem
    }

    #filter {
        width: 250px
    }

    .hotel .fas,
    .hotel .far {
        font-size: .8rem
    }

    .hotel .fas.fa-star {
        color: #ffa500
    }

    .hotel .tags {
        font-size: 0.8rem
    }

    .hotel .btn {
        width: 150px;
        border-radius: 0
    }

    .hotel .btn.enquiry {
        background-color: #ff761b;
        color: #fff
    }

    .hotel .btn.enquiry:hover {
        background-color: #fc771fef
    }

    #hotels {
        width: 100%
    }

    @media(min-width: 1399.6px) {
        #navbar-toggler-icon {
            display: none
        }
    }

    @media(max-width: 1399.5px) {
        #navbar-toggler-icon {
            display: block;
            z-index: 11
        }

        /* #side-nav {
        float: none;
        width: 250px;
        background-color: #161616f5;
        z-index: 10
    } */

        #content {
            float: none;
            width: 100%;
            padding: 30px
        }
    }

    @media(max-width: 1199.5px) {
        .hotel .hotel-img {
            width: 170px
        }

        #side-nav {
            height: initial
        }
    }

    @media(max-width: 767.5px) {
        .hotel .city {
            display: block
        }

        .hotel .btn {
            width: 120px;
            font-size: 0.85rem
        }

        input[type="submit"] {
            width: 100px;
            font-size: 0.9rem;
            margin-right: 10px
        }
    }

    @media(max-width: 575.5px) {

        #filter,
        #hotels {
            width: 95%;
            margin: 15px
        }
    }

    @media(max-width: 410px) {

        #filter,
        #hotels {
            width: 93%;
            margin: 10px
        }
    }
</style>

@section('section')
    <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Rooms</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner -->
    <div class="container-fluid bg-sec-light">
        <div id="content">
            <div class="d-sm-flex">
                <div class="me-sm-2">
                    <div id="filter" class="p-2 bg-light ms-md-4 ms-sm-2 border">
                        <div class="border-bottom h5 text-uppercase">Filter By</div>
                        <div class="box border-bottom">
                            <div class="box-label text-uppercase d-flex align-items-center">Price <button
                                    class="btn ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#inner-box"
                                    aria-expanded="false" aria-controls="inner-box"> <span class="fas fa-plus"></span>
                                </button> </div>
                            <div id="inner-box" class="collapse show">
                                <div class="my-1"> <label class="tick">Less than 2000 <input type="checkbox"
                                            checked="checked"> <span class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">2000 - 3000 <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">3000 - 4500 <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">4500 - 6000 <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">6000 - 8000 <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">8000 -10,000 <input type="checkbox" checked>
                                        <span class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">10,000 and Above <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                            </div>
                        </div>
                        <div class="box border-bottom">
                            <div class="box-label text-uppercase d-flex align-items-center">Property Type <button
                                    class="btn ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#property"
                                    aria-expanded="false" aria-controls="property"> <span class="fas fa-plus"></span>
                                </button> </div>
                            <div id="property" class="collapse">
                                <div class="my-1"> <label class="tick">Hotels <input type="checkbox" checked="checked">
                                        <span class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">Apartments <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">Guest houses <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">Resorts <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">Villas <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">Lodges <input type="checkbox" checked> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">Holiday Homes <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                            </div>
                        </div>
                        <div class="box border-bottom">
                            <div class="box-label text-uppercase d-flex align-items-center">Amenities <button
                                    class="btn ms-auto" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#amenities" aria-expanded="false" aria-controls="amenities"> <span
                                        class="fas fa-plus"></span> </button> </div>
                            <div id="amenities" class="collapse show">
                                <div class="my-1"> <label class="tick">Parking <input type="checkbox"
                                            checked="checked"> <span class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">Pets Allowed <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">Room Service <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">Family Rooms <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">Free Wifi <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">Non-smoking Rooms <input type="checkbox"
                                            checked> <span class="check"></span> </label> </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-label text-uppercase d-flex align-items-center">Room Facilities <button
                                    class="btn ms-auto" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#room-facilities" aria-expanded="false"
                                    aria-controls="room-facilities"> <span class="fas fa-plus"></span> </button> </div>
                            <div id="room-facilities" class="collapse">
                                <div class="my-1"> <label class="tick">Air Condentioning <input type="checkbox"
                                            checked="checked"> <span class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">Desk <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">Balcony <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">Flat Screen TV <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">Coffe/Tea Maker <input type="checkbox"> <span
                                            class="check"></span> </label> </div>
                                <div class="my-1"> <label class="tick">Washing Machine <input type="checkbox"
                                            checked> <span class="check"></span> </label> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-2 border" id="hotels">
                    <div class="hotel py-2 px-2 pb-4 border-bottom">
                        <div class="row">
                            <div class="col-lg-3"> <img
                                    src="https://images.unsplash.com/photo-1580835845971-a393b73bf370?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80"
                                    alt="" class="hotel-img"> </div>
                            <div class="col-lg-9">
                                <div class="d-md-flex align-items-md-center">
                                    <div class="name">Mayflower Hibiscus Inn <span class="city">Bandra, Mumbai</span>
                                    </div>
                                    <div class="ms-auto code text-uppercase">ABD09eh8</div>
                                </div>
                                <div class="rating"> <span class="fas fa-star"></span> <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                        class="far fa-star"></span> <!-- Book now Enquiry -->
                                </div>
                                <div class="d-flex flex-column tags pt-1">
                                    <div><span class="fas fa-comment-dollar"></span> Fee Canellation</div>
                                    <div><span class="fas fa-receipt"></span> Express check-in</div>
                                    <div><span class="fas fa-concierge-bell"></span> Concierge</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-1">
                            <div class="btn enquiry text-uppercase mx-2">Enquiry</div>
                            <div class="btn btn-primary text-uppercase">Book Now</div>
                        </div>
                    </div>
                    <div class="hotel py-2 px-2 pb-4 border-bottom">
                        <div class="row">
                            <div class="col-lg-3"> <img
                                    src="https://images.unsplash.com/photo-1596618502142-d2a9d0c1fc2e?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NTd8fHJlc29ydHN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                    alt="" class="hotel-img"> </div>
                            <div class="col-lg-9">
                                <div class="d-md-flex align-items-md-center">
                                    <div class="name">Sunflower Hibiscus Inn <span class="city">Zuhu, Mumbai</span>
                                    </div>
                                    <div class="ms-auto code text-uppercase">ABD09eh8</div>
                                </div>
                                <div class="rating"> <span class="fas fa-star"></span> <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                        class="far fa-star"></span> <!-- Book now Enquiry -->
                                </div>
                                <div class="d-flex flex-column tags pt-1">
                                    <div><span class="fas fa-comment-dollar"></span> Fee Canellation</div>
                                    <div><span class="fas fa-receipt"></span> Express check-in</div>
                                    <div><span class="fas fa-concierge-bell"></span> Concierge</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-1">
                            <div class="btn enquiry text-uppercase mx-2">Enquiry</div>
                            <div class="btn btn-primary text-uppercase">Book Now</div>
                        </div>
                    </div>
                    <div class="hotel py-2 px-2 pb-4">
                        <div class="row">
                            <div class="col-lg-3"> <img
                                    src="https://images.unsplash.com/photo-1583037189850-1921ae7c6c22?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NzV8fHJlc29ydHN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                    alt="" class="hotel-img"> </div>
                            <div class="col-lg-9">
                                <div class="d-md-flex align-items-md-center">
                                    <div class="name">Atlantic Inn <span class="city">Mulund West, Mumbai</span>
                                    </div>
                                    <div class="ms-auto code text-uppercase">ABD09eh8</div>
                                </div>
                                <div class="rating"> <span class="fas fa-star"></span> <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                        class="far fa-star"></span> <!-- Book now Enquiry -->
                                </div>
                                <div class="d-flex flex-column tags pt-1">
                                    <div><span class="fas fa-comment-dollar"></span> Fee Canellation</div>
                                    <div><span class="fas fa-receipt"></span> Express check-in</div>
                                    <div><span class="fas fa-concierge-bell"></span> Concierge</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-1">
                            <div class="btn enquiry text-uppercase mx-2">Enquiry</div>
                            <div class="btn btn-primary text-uppercase">Book Now</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

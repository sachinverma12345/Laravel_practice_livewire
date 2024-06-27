@extends('layouts.web.master')
@section('page-title', 'our-room')
<style>
    .container-fluid {
        position: relative;
        /* overflow-y: auto */
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

    #content .user-select-none {
        user-select: none
    } 
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

    /* .hotel .hotel-img {
        width: 200px;
        object-fit: contain
    } */
    .hotel .hotel-img {
        width: 485px;
        height: 300px;
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

    .hotel .fa,
    .hotel .fa {
        font-size: .8rem
    }

    .hotel .fa.fa-star {
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
    .gallery_image .child_gallery {
        height: 60px;
        width: 100px;
        padding: 1px;
    }
    .sticky-bottom {
        position: absolute;
        bottom: 0;
        width: 95%;
        padding: 10px;
        }
</style>
@section('section')
    <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Our Room</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_room -->
    <div class="our_room">
        <div class="container-fluid">
            
                    <livewire:room-component />
               
        </div>
    </div>
    <!-- end our_room -->
@stop

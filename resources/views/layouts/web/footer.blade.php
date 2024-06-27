
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class=" col-md-4">
                        <h3>Contact US</h3>
                        <ul class="conta">
                            {{-- <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li> --}}
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>  Anavamoana Hotel
                                Vaitele, Samoa</li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i> 0685-21421</li>
                            <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#">info@anavamoanahotel.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Menu Link</h3>
                        <ul class="link_menu">
                            <li class="active"><a href="{{route('home.index')}}">Home</a></li>
                            <li><a href="{{route('home.about')}}">About Us</a></li>
                            <li><a href="{{route('home.room')}}">Our Room</a></li>
                            <li><a href="{{route('home.gallery')}}">Gallery</a></li>
                            <li><a href="{{route('home.services')}}">Our Services</a></li>
                            <li><a href="{{route('home.contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>News letter</h3>
                        <form class="bottom_form">
                            <input class="enter" placeholder="Enter your email" type="text"
                                name="Enter your email">
                            <button class="sub_btn">subscribe</button>
                        </form>
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">

                            <p>
                                © 2024 All Rights Reserved. Design by <a href="#">urbantech</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    
    <script src="{{ asset('/livewire/livewire.js') }}" defer></script>
    @livewireScripts
    <script src="{{ asset('public/web/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/web/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/web/js/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('public/web/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('public/web/js/custom.js') }}"></script>
</body>

</html>

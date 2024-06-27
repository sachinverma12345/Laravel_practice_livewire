<div>
    <div class="content">
        <div class="d-sm-flex">
            <div class="me-sm-2">
                <div id="filter" class="p-2 bg-light ms-md-4 ms-sm-2 border">
                    <div class="border-bottom h5 text-uppercase">Filter By</div>
                    <div class="box border-bottom">
                        <div class="box-label text-uppercase d-flex align-items-center">Price <button class="btn ms-auto"
                                type="button" data-bs-toggle="collapse" data-bs-target="#inner-box"
                                aria-expanded="false" aria-controls="inner-box"> <span class="fa fa-plus"></span>
                            </button> </div>
                        <div id="inner-box" class="collapse show">
                            @foreach($rooms->pluck('price_per_night')->unique() as $price)
                            <div class="my-1"> <label class="tick"> &#36;{{$price}}<input type="checkbox"
                              wire:model="selectedPrice.{{ $price }}" wire:change="updatedSelectedPrices">
                            <span class="check"></span> </label> </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="box border-bottom">
                        <div class="box-label text-uppercase d-flex align-items-center">Amenities <button
                                class="btn ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#amenities"
                                aria-expanded="false" aria-controls="amenities">
                                <span class="fa fa-plus"></span> </button> </div>
                        <div id="amenities" class="collapse show">
                            @foreach($rooms->pluck('room_type')->unique() as $type)
                            <div class="my-1"> <label class="tick"> {{ $type }} <input type="checkbox">
                                <span class="check"></span> </label> </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white p-2 border" id="hotels">

                @foreach ($rooms as $room)
                    <div class="hotel py-2 px-2 pb-4 border-bottom">
                        <div class="row">
                            <div class="col-lg-6 d-flex"> <img
                                    src="{{ asset('/storage/app/public/' . $room->room_banner) }}" alt=""
                                    class="hotel-img">
                                <div class="gallery_image">
                                    @if (filled($room->galleries))
                                        @foreach ($room->galleries as $gallery)
                                            <div class="gallery_box">
                                                <div class=""><img alt="Gallery Image Not Found"
                                                        src="{{ asset('/storage/app/public/' . $gallery->path) }}"
                                                        placeholdertype="hotel" class="child_gallery"
                                                        itemprop="image" lazyload="true"></div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-md-flex align-items-md-center">
                                    <div class="name">{{ $room->title }}<span class="city">
                                            {{ $room->room_type }}
                                        </span>
                                    </div>
                                    <div class="ms-auto code text-uppercase"> {{ $room->room_id }} </div>
                                </div>
                                {{-- <div class="rating"> <span class="fa fa-star"></span> <span
                                            class="fa fa-star"></span>
                                        <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                            class="fa fa-star"></span> <!-- Book now Enquiry -->
                                    </div> --}}
                                <div class="d-flex flex-column tags pt-1">
                                    <div><span class="fa fa-comment-dollar"></span>Fee Canellation</div>
                                    <div><span class="fa fa-receipt"></span> Express check-in</div>
                                    <div><span class="fa fa-concierge-bell"></span> Concierge</div>
                                    @if ($room->is_wifi)
                                        <div><span class="fa fa-concierge-bell"></span>WIFI</div>
                                    @endif
                                    @if ($room->is_car_park)
                                        <div><span class="fa fa-concierge-bell"></span>Car Park</div>
                                    @endif
                                    @if ($room->is_tv)
                                        <div><span class="fa fa-concierge-bell"></span>Telivision</div>
                                    @endif
                                    @if ($room->is_fridge)
                                        <div><span class="fa fa-concierge-bell"></span>Fridge</div>
                                    @endif
                                </div>
                                <div class="d-flex sticky-bottom">
                                    <div>
                                        <h2> &#36;{{ $room->price_per_night }} </h2>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="btn enquiry text-uppercase mx-2">Enquiry</div>
                                        <div class="btn btn-primary text-uppercase">Book Now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

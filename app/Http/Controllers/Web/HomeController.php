<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(){
        return view('web.index');
    }
    public function aboutUs(){
        return view('web.about-us');
    }
    public function ourRoom(){
        return view('web.our-room');
    }
    public function gallery(){
        return view('web.gallery');
    }
    public function blog(){
        return view('web.blog');
    }
    public function contactUs(){
        return view('web.contact-us');
    }
    public function c1(){
        $title = 'Manish Verma';
        return Str::slug($title);
        $random = random_int(100000,900000);
        return $random;
        return view('web.login');
    }

    public function c(){
        return view('welcome');
    }
}

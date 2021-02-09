<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function works(){
        return view('frontend.works');
    }

    public function about(){
        return view('frontend.about');
    }

    public function blog(){
        return view('frontend.blog');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function tos(){
        return view('frontend.tos');
    }

    public function privacy(){
        return view('frontend.privacy');
    }

    public function faq(){
        return view('frontend.faq');
    }
}

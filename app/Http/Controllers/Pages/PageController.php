<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.services.index');
    }

    public function mannedGuarding()
    {
        return view('frontend.services.manned-guarding');
    }

    public function specialServices()
    {
        return view('frontend.services.special-services');
    }

    public function k9Unit()
    {
        return view('frontend.services.k9-unit');
    }

    public function consultancyTraining()
    {
        return view('frontend.services.consultancy-training');
    }

    public function sectors()
    {
        return view('frontend.sectors');
    }

    public function operations()
    {
        return view('frontend.operations');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}

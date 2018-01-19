<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }
    public function femaleProduct(){
        return view('front-end.category.female-product');
    }
    public function maleProduct(){
        return view('front-end.category.male-product');
    }

    public function mailUs(){
        return view('front-end.mail-us');
    }
    public function singleProduct(){
        return view('front-end.category.single-product');
    }
    public function checkout(){
        return view('front-end.checkout');
    }

    public function login(){
        return view('front-end.login');
    }

    public function registration(){
        return view('front-end.registration');
    }
    public function code(){
        return view('front-end.code');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Vendor;


class UserController extends Controller
{
    public function ChooseUser(){
        return view('chooseuser');
    }
    public function Services(){
        return view('services');
    }
    public function Gallery(){
        return view('gallery');
    }
    public function ContactUs(){
        return view('contactus');
    }
}

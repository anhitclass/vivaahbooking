<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Vendor;
use App\Models\Post;


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
    
    public function VendorsGet($id){
        $get_vendors=Vendor::where('business_type',$id)->get();
        return view('vendorlist',compact('get_vendors'));
    }

    public function VendorPost($id)
    {
        $post_data = Post::where('posts.vendor_id', $id)
            ->join('subservices', 'posts.service', '=', 'subservices.id')
            ->join('services', 'posts.business_type', '=', 'services.id')
            ->join('vendors', 'posts.vendor_id', '=', 'vendors.id')
            ->select(
                'posts.*',
                'subservices.name as subservice_name',
                'services.name as service_name',      
                'vendors.name as vendor_name'         
            )
            ->get();
    
        return view('vendorpost', compact('post_data'));
    }
    
    
}

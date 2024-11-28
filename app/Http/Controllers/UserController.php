<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Vendor;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Str; 
use App\Models\User;
use App\Models\Inquiry;
use DataTables;



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
        return view('vendorlist',compact('id'));
    }

    public function VendorData($id){
        $vendors = Vendor::where('business_type', $id)->get();

        return response()->json([
            'data' => $vendors, 
        ]);
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

    public function create_inquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'function' => 'required|string|max:255',
            'venue' => 'required|string|max:255',
        ]);
    
        $validated['user_id'] = auth()->id();
    
        Inquiry::create($validated);
    
        return response()->json([
            'success' => true,
            'message' => 'Inquiry submitted successfully!',
        ]);
    }
    

    // public function redirectToGoogle()
    // {
    //     return Socialite::driver('google')->redirect();
    // }

    // public function handleGoogleCallback()
    // {
    //     try {
    //         $googleUser = Socialite::driver('google')->stateless()->user();

    //         $user = User::firstOrCreate(
    //             ['email' => $googleUser->getEmail()],
    //             [
    //                 'name' => $googleUser->getName(),
    //                 'google_id' => $googleUser->getId(),
    //                 'password' => bcrypt(Str::random(24)),
    //             ]
    //         );

    //         Auth::login($user);

    //         return redirect()->intended('/home');
    //     } catch (Exception $e) {
    //         return redirect()->route('login')->withErrors(['error' => 'Unable to login with Google: ' . $e->getMessage()]);
    //     }
    // }

   
    
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;

class VendorController extends Controller
{
    public function LoginVendor(){
        return view('vendor.auth.login');
    }

    public function CreateVendor(){
        $services=Service::all();
        return view('vendor.auth.registervendor',compact('services'));
    }

    public function StoreVendor(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:vendors,email',
            'password' => 'required|string|min:8|confirmed',
            'business_name' => 'required|string|max:255',
            'business_type' => 'required|string|max:255',
            'business_certificate' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'contact_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'pincode' => 'required|string|max:10',
        ]);

        if ($request->hasFile('business_certificate')) {
            $validatedData['business_certificate'] = $request->file('business_certificate')->store('certificates', 'public');
        }

        $validatedData['password'] = Hash::make($request->input('password'));

        Vendor::create($validatedData);

        return redirect()->route('login_vendor')->with('success', 'Vendor registered successfully!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Attempt to authenticate the vendor with the vendor guard
        if (Auth::guard('vendor')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            // Authentication passed, redirect to the intended dashboard or route
            return redirect()->route('dashboard');
        }

        // If the login attempt failed, redirect back with an error message
        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }


    public function dashboard(){
        return view('vendor.dashboard');
    }
}

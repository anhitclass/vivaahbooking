<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Service;
use App\Models\SubService;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function CreatePost(){
        $services=Service::all();
        $type = Auth::guard('vendor')->user()->business_type;
        $subcategories=SubService::where('service_id',$type)->get();
        return view('vendor.posts.create',compact('services','subcategories'));
    }

    public function StorePost(Request $request)
    {
    
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'service' => 'required|string|max:255',
            'images' => 'required|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);
    
        $imagePaths = [];
    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('uploads/images', 'public');
                $imagePaths[] = $path;
            }
        }
    
        $jsonImages = json_encode($imagePaths);
    
        Post::create([
            'name' => $validatedData['name'],
            'service' => $validatedData['service'],
            'image' => $jsonImages,
            'business_type'=>$request->business_type,
            'vendor_id' => Auth::guard('vendor')->user()->id,
        ]);
    
        return redirect()->route('create_post')->with('success', 'Post registered successfully!');
    }
    
   
    
}

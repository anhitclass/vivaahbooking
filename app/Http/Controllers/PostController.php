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

    public function StorePost(Request $request){
    
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'service' => 'required|string',
            'kyc' => 'nullable|file|mimes:pdf,jpg,jpeg,png',
            'contact_no' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'business_doc' => 'nullable|file|mimes:pdf,jpg,jpeg,png',
        ]);

        if ($request->hasFile('kyc')) {
            $validatedData['kyc'] = $request->file('kyc')->store('kyc_docs', 'public');
        }

        if ($request->hasFile('business_doc')) {
            $validatedData['business_doc'] = $request->file('business_doc')->store('business_docs', 'public');

        }
        Post::create($validatedData);
        return redirect()->route('create_post')->with('success', 'Post registered successfully!');
    }

    public function DataGetPost(Request $request) {
        $serviceId = $request->service_id;
        $posts = Post::where('service', $serviceId)->get();
        
        // Check if posts exist
        if ($posts->isNotEmpty()) {
            $postArray = [];
            
            foreach ($posts as $post) {
                $postArray[] = [
                    'name' => $post->name,
                    'contact_no' => $post->contact_no,
                    'address' => $post->address,
                ];
            }
            
            return response()->json([
                'success' => true,
                'posts' => $postArray 
            ]);
        } else {
            return response()->json([
                'success' => false,
                'posts' => []
            ]);
        }
    }

    // public function getSubcategories(Request $request)
    // {
    //     dd(1);
    //     $businessTypeId = $request->business_type_id;

    //     $subcategories = SubService::where('service', $businessTypeId)->get();

    //     return response()->json($subcategories);
    // }

    
}

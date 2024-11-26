<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use Illuminate\Support\Str;


class AgentController extends Controller
{
    public function AgentCreate()
    {
        return view('agent.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:agents,email',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string',
            'bank_account_no' => 'required|string',
            'bank_ifsc_code' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'aadhar_card' => 'required|mimes:jpg,jpeg,png|max:2048',
            'pan_card' => 'required|mimes:jpg,jpeg,png|max:2048',
            'cancel_cheque' => 'required|mimes:jpg,jpeg,png|max:2048',
            'passbook' => 'required|mimes:jpg,jpeg,png|max:2048',
            'qualification' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Create a new agent record
        $agent = new Agent();
        $agent->name = $request->input('name');
        $agent->email = $request->input('email');
        $agent->phone_number = $request->input('phone_number');
        $agent->address = $request->input('address');
        $agent->bank_account_no = $request->input('bank_account_no');
        $agent->bank_ifsc_code = $request->input('bank_ifsc_code');

        // Generate and assign the referral code
        $referralCode = $this->generateReferralCode();
        $agent->referral_code = $referralCode;

        // Handle image and file uploads
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('agents/images', 'public');
            $agent->image = $imagePath;
        }

        if ($request->hasFile('aadhar_card')) {
            $aadharCardPath = $request->file('aadhar_card')->store('agents/documents', 'public');
            $agent->aadhar_card = $aadharCardPath;
        }

        if ($request->hasFile('pan_card')) {
            $panCardPath = $request->file('pan_card')->store('agents/documents', 'public');
            $agent->pan_card = $panCardPath;
        }

        if ($request->hasFile('cancel_cheque')) {
            $cancelChequePath = $request->file('cancel_cheque')->store('agents/documents', 'public');
            $agent->cancel_cheque = $cancelChequePath;
        }

        if ($request->hasFile('passbook')) {
            $passbookPath = $request->file('passbook')->store('agents/documents', 'public');
            $agent->passbook = $passbookPath;
        }

        if ($request->hasFile('qualification')) {
            $qualificationPath = $request->file('qualification')->store('agents/documents', 'public');
            $agent->qualification = $qualificationPath;
        }

        // Save the agent to the database
        $agent->save();

        // Redirect to the show page of the newly created agent with a success message
        return redirect()->route('agent_show', $agent->id)->with('success', 'Agent created successfully!');
    }

    protected function generateReferralCode()
    {
        do {
            $randomCode = Str::random(6);
            $referralCode = 'VB' . strtoupper($randomCode); 
        } while (Agent::where('referral_code', $referralCode)->exists()); 
        return $referralCode;
    }
    
    public function show($id)
    {
        $agent = Agent::findOrFail($id);
        return view('agent.show', compact('agent'));
    }
}

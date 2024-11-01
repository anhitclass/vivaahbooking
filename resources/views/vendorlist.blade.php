@extends('layouts.app')
@section('content')
<div class="vendor-details">
    @forelse ($get_vendors as $vendor)
        <h2>
            <a href="{{ route('VendorPost', ['id' => $vendor->id]) }}">
                {{ $vendor->name }}
            </a>
            <span class="vendor-id" style="display: none;">{{ $vendor->id }}</span>
        </h2>
        <p><strong>Email:</strong> {{ $vendor->email }}</p>
        <p><strong>Business Name:</strong> {{ $vendor->business_name }}</p>
        <p><strong>Contact:</strong> {{ $vendor->contact_number }}</p>
        <p><strong>Address:</strong> {{ $vendor->address }}</p>
        <p><strong>Business Certificate:</strong></p>
        <img src="{{ asset('storage/' . $vendor->business_certificate) }}" alt="Business Certificate of {{ $vendor->name }}" height="100" width="200">
    @empty
        <h3>No Vendor Found</h3>
    @endforelse
</div>
@endsection

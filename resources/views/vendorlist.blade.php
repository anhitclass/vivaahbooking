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
{{-- @push('scripts')
<script>
    $(document).ready(function () {
        $('#vendorTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route("VendorData", $id) }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'business_name', name: 'business_name' },
                { data: 'contact_number', name: 'contact_number' },
                { data: 'address', name: 'address' },
                {
                    data: 'business_certificate',
                    name: 'business_certificate',
                    render: function (data) {
                        return `<img src="/storage/${data}" alt="Certificate" height="50" width="100">`;
                    },
                }
            ],
        });
    });
</script>

@endpush --}}

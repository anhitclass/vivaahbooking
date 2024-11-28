@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <table id="vendorTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Business Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Certificate</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@push('scripts')
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

@endpush

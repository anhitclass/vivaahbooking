@extends('layouts.app')
@section('content')
<div class="post-details">
    @forelse ($post_data as $post)
        <h2>{{ $post->name }}</h2>
        <p><strong>Vendor:</strong> {{ $post->vendor_name }}</p> 
        <p><strong>Service:</strong> {{ $post->service_name }}</p> 
        <p><strong>Sub Category:</strong> {{ $post->subservice_name }}</p> 
        <div class="post-images">
            @foreach ($post->image as $image)
                <img src="{{ asset('storage/' . $image) }}" alt="Image of {{ $post->name }}" height="100" width="200">
            @endforeach
        </div>
    @empty
        <h3>No Post Found</h3>
    @endforelse
</div>

<button class="btn btn-primary mt-4 inquiry">Inquiry</button>

<!-- Modal -->
<div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="inquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="inquiryModalLabel">Inquiry Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            @csrf
                <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" 
                        value="{{ auth()->user()->name }}" readonly>
                </div>
                <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" 
                        value="{{ auth()->user()->email }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="function" class="form-label">Function</label>
                    <input type="text" class="form-control" id="function" name="function">
                </div>
                <div class="mb-3">
                    <label for="venue" class="form-label">Venue</label>
                    <input type="text" class="form-control" id="venue" name="venue">
                </div>
            <button type="submit" class="btn btn-primary create_inquiry">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).on('click','.inquiry',function () {
       $('#inquiryModal').modal('show');
    });


    $(document).on('click', '.create_inquiry', function (e) {
        e.preventDefault();
        let formData = {
            name: $('#name').val(),
            email: $('#email').val(),
            function: $('#function').val(),
            venue: $('#venue').val(),
            _token: $('input[name="_token"]').val()
        };

        $.ajax({
            url: '{{route('create_inquiry')}}', 
            method: 'POST',
            data: formData,
            success: function (response) {
                if (response.success) {
                    alert(response.message || 'Inquiry submitted successfully!');
                    location.reload();
                   
                } else {
                    alert(response.message || 'Failed to submit inquiry.');
                }
            },
            error: function (xhr) {
                // Parse and display validation errors
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessages = Object.values(errors).flat().join('\n');
                    alert('Validation Errors:\n' + errorMessages);
                } else {
                    alert('An unexpected error occurred. Please try again.');
                }
            }
        });
    });
</script>
  

@endpush

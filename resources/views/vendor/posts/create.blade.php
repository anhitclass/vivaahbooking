@extends('vendor.layout.master')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Post') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('store_post')}}"
                    enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="service" class="col-md-4 col-form-label text-md-end">{{ __('Subcategory') }}</label>

                            <div class="col-md-6">
                                <select id="service" class="form-control @error('service') is-invalid @enderror" name="service" required autofocus>
                                    <option value="">Select SubCategory</option>
                                    @forelse($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                    @empty
                                        <option value="">No SubCategories available</option>
                                    @endforelse
                                </select>
                            
                                @error('service')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>

                        
                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>
                        
                            <div class="col-md-6">
                                <input id="image" type="file" 
                                       class="form-control @error('images') is-invalid @enderror" 
                                       name="images[]" multiple required>
                        
                                @error('images')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                                <span id="image-error" class="text-danger d-none">You can upload a maximum of 5 images.</span>
                            </div>
                        </div>
                        

                       
                        <input type="hidden" id="businessType" name="business_type" value="{{ Auth::guard('vendor')->user()->business_type}}">

                       
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#image').on('change', function () {
            let files = $(this)[0].files;
            if (files.length > 5) {
                $('#image-error').removeClass('d-none'); 
                $(this).val('');  
            } else {
                $('#image-error').addClass('d-none'); 
            }
        });
    });
</script>
@endpush
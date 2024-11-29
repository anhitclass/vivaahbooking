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
                            <label for="service" class="col-md-4 col-form-label text-md-end">{{ __('Service') }}</label>

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
                            <label for="kyc" class="col-md-4 col-form-label text-md-end">{{ __('KYC') }}</label>

                            <div class="col-md-6">
                                <input id="kyc" type="file" class="form-control @error('kyc') is-invalid @enderror" name="kyc" value="{{ old('kyc') }}" required autocomplete="kyc" autofocus>

                                @error('kyc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="contact_no" class="col-md-4 col-form-label text-md-end">{{ __('Contact Number') }}</label>

                            <div class="col-md-6">
                                <input id="contact_no" type="text" class="form-control @error('contact_no') is-invalid @enderror" name="contact_no" value="{{ old('contact_no') }}" required autocomplete="contact_no" autofocus>

                                @error('contact_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <input type="hidden" id="businessType" name="business_type" value="{{ Auth::guard('vendor')->user()->business_type}}">

                        <div class="row mb-3">
                            <label for="business_doc" class="col-md-4 col-form-label text-md-end">{{ __('Business Document') }}</label>

                            <div class="col-md-6">
                                <input id="business_doc" type="file" class="form-control @error('business_doc') is-invalid @enderror" name="business_doc" value="{{ old('business_doc') }}" required autocomplete="business_doc" autofocus>

                                @error('business_doc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Agent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Agent') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{route('agent_store')}}"
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
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>
    
                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
    
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
    
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="bank_account_no" class="col-md-4 col-form-label text-md-end">{{ __('Bank Account No') }}</label>
    
                                <div class="col-md-6">
                                    <input id="bank_account_no" type="text" class="form-control @error('bank_account_no') is-invalid @enderror" name="bank_account_no" value="{{ old('bank_account_no') }}" required autocomplete="bank_account_no" autofocus>
    
                                    @error('bank_account_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="bank_ifsc_code" class="col-md-4 col-form-label text-md-end">{{ __('Bank IFSC Code') }}</label>
    
                                <div class="col-md-6">
                                    <input id="bank_ifsc_code" type="text" class="form-control @error('bank_ifsc_code') is-invalid @enderror" name="bank_ifsc_code" value="{{ old('bank_ifsc_code') }}" required autocomplete="bank_ifsc_code" autofocus>
    
                                    @error('bank_ifsc_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>
    
                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>
    
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="aadhar_card" class="col-md-4 col-form-label text-md-end">{{ __('Aadhar Card') }}</label>
    
                                <div class="col-md-6">
                                    <input id="aadhar_card" type="file" class="form-control @error('aadhar_card') is-invalid @enderror" name="aadhar_card" value="{{ old('aadhar_card') }}" required autocomplete="aadhar_card" autofocus>
    
                                    @error('aadhar_card')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="pan_card" class="col-md-4 col-form-label text-md-end">{{ __('Pan Card') }}</label>
    
                                <div class="col-md-6">
                                    <input id="pan_card" type="file" class="form-control @error('pan_card') is-invalid @enderror" name="pan_card" value="{{ old('pan_card') }}" required autocomplete="pan_card" autofocus>
    
                                    @error('pan_card')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="cancel_cheque" class="col-md-4 col-form-label text-md-end">{{ __('Cancel Cheque') }}</label>
    
                                <div class="col-md-6">
                                    <input id="cancel_cheque" type="file" class="form-control @error('cancel_cheque') is-invalid @enderror" name="cancel_cheque" value="{{ old('cancel_cheque') }}" required autocomplete="cancel_cheque" autofocus>
    
                                    @error('cancel_cheque')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="passbook" class="col-md-4 col-form-label text-md-end">{{ __('Passbook') }}</label>
    
                                <div class="col-md-6">
                                    <input id="passbook" type="file" class="form-control @error('passbook') is-invalid @enderror" name="passbook" value="{{ old('passbook') }}" required autocomplete="passbook" autofocus>
    
                                    @error('passbook')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="qualification" class="col-md-4 col-form-label text-md-end">{{ __('Qualification') }}</label>
    
                                <div class="col-md-6">
                                    <input id="qualification" type="file" class="form-control @error('qualification') is-invalid @enderror" name="qualification" value="{{ old('qualification') }}" required autocomplete="qualification" autofocus>
    
                                    @error('qualification')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
       
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create Agent') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
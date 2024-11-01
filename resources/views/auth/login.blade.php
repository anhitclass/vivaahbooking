<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>vivaah.com Login Form</title>
    <style>
                         
    body{
        
        background-image:linear-gradient(rgb(0, 0, 0, 0.5), rgb(0, 0, 0, 0.5)), url('images/sadi.jpg')!important;
        background-size:cover;
    }

    </style>
</head>
<body>
    <div class="container">
        <i class="material-icons">close</i>
        <div class="logo">
            <img src="{{ asset('images/vivaah_booking_logo.png') }}" alt="Shaadi.com Logo">
        </div>
        <div class="heading">
            <h2>Welcome back! Please Login</h2>
        </div>
        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf
            <div class="form-group">
                <label for="email">Mobile No./ Email ID</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Enter Mobile No./ Email ID">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="checkbox">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Stay Logged in?</label>
                <div class="forgotten-password">
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
            </div>
            <button type="submit" class="login-button">Login</button>
            <div class="or">
                <span>OR</span>
            </div>
            <div class="login-with-otp-button">
                <a href="{{route('login_vendor')}}" style="color:#000; text-decoration: none;">Login as Vendor</a>
            </div>
            <div class="new-to-shaadi">
                <p>New to VivaahBooking? <a href="{{ route('chooseuser') }}">Sign Up </a></p>
            </div>
        </form>
    </div>
</body>
</html>

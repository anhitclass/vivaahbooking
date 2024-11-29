<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
<style>
    body{
    
    background-image:linear-gradient(rgb(0, 0, 0, 0.5), rgb(0, 0, 0, 0.5)), url('images/sadi.jpg')!important;
    background-size:cover;
}
</style>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2>Registration</h2>

            <div class="form-group">
                <label for="name">Name:</label>
                <div class="input-field">
                    <input type="text" id="name" name="name" required placeholder="Enter Full Name" value="{{ old('name') }}">
                </div>
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email_id">Email ID:</label>
                <div class="input-field">
                    <input type="email" id="email_id" name="email" required placeholder="Enter Your Email ID" value="{{ old('email') }}">
                </div>
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <div class="input-field">
                    <input type="password" id="password" name="password" required placeholder="Enter Your Password">
                </div>
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password-confirm">Confirm Password:</label>
                <div class="input-field">
                    <input type="password" id="password-confirm" name="password_confirmation" required placeholder="Confirm Your Password">
                </div>
            </div>

            <div class="button-container">
                <button type="submit" id="submit_button" class="btn-submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>

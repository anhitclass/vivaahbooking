<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choose User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            /* Light background color for the page */
            font-family: 'Arial', sans-serif;
            background-image:linear-gradient(rgb(0, 0, 0, 0.5), rgb(0, 0, 0, 0.5)), url('images/sadi.jpg');
            background-size:cover;
            background-position: center;
            
        }

        .card {
            border-radius: 15px;
            /* Rounded corners for a sleek look */
            overflow: hidden;
            /* Ensures the background image doesn't overflow the card */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Smooth transitions for hover effects */
        }

        .card:hover {
            transform: scale(1.05);
            /* Slightly enlarge the card on hover */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            /* More pronounced shadow on hover */
        }

        .card-background-user,
        .card-background-vendor {
            background-size: cover;
            background-position: center;
            color: white;
            height: 450px;
            width: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .card-background-user {
            background-image:linear-gradient(rgb(0, 0, 0, 0.2), rgb(0, 0, 0, 0.3)), url('images/user.jpg.jpg');
            /* Replace with your image URL */
        }

        .card-background-vendor {
            background-image:linear-gradient(rgb(0, 0, 0, 0.2), rgb(0, 0, 0, 0.3)), url('images/vendor.jpg.jpg');
            /* Replace with your image URL */
        }

        .card-body {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            background: rgba(0, 0, 0, 0.3);
            /* Semi-transparent background for text readability */
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }

        .btn-light {
            background-color: #ffffff;
            /* White button background */
            color: #000000;
            /* Black text */
            border-radius: 20px;
            /* Rounded button corners */
            border: 2px solid #000000;
            /* Black border */
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }

        .btn-light:hover {
            background-color: #000000;
            /* Black background on hover */
            color: #ffffff;
            /* White text on hover */
            border-color: #ffffff;
            /* White border on hover */
        }

        .container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            gap: 10px;
        }
        .agentbtn{
            font-size: 20px;
            color: #ffffff;
            margin-left: 85%;
            margin-top:8%;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <!-- User Card -->
            <div class="col-md-6 mb-4 d-flex justify-content-center">
                <div class="card card-background-user">
                    <div class="card-body">
                        <h5 class="card-title">Register as a User</h5>
                        <a href="{{route('register')}}" class="btn btn-light">Register</a>
                    </div>
                </div>
            </div>
            <!-- Vendor Card -->
            <div class="col-md-6 mb-4 d-flex justify-content-center">
                <div class="card card-background-vendor">
                    <div class="card-body">
                        <h5 class="card-title">Register as a Vendor</h5>
                        <a href="{{route('create_vendor')}}" class="btn btn-light">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     {{-- Agent Card --}}
     <!-- <a href="{{route('AgentCreate')}}" class="btn btn-primary mb-4">Wants To be an Agent</a> -->
        <p class="agentbtn">Wants To be an <span><a href="{{route('AgentCreate')}}">Agent</a> ?</span></p>
</body>

</html>
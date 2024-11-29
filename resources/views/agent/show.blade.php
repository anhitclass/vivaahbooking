<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Referral Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/forget.css') }}">

    <style>
        .mt-3{
            border: 5px dotted white ;
            width: 150px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Copy This Code ') }}</div>
                    <div class="card-body">
                       <!-- <center> <h2> Code</h2> </center> -->
                      <center>  <h3 class="mt-3">{{ $agent->referral_code }}</h3> </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
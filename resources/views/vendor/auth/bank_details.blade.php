<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bank Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Bank Details') }}</div>
                    <div class="card-body">
                        <p>
                            <strong>DCB Bank Account Details:</strong><br>
                            Account Name: SHIV KUMAR<br>
                            Account Number: 31210600000569<br>
                            IFSC Code: DCBL0000312<br>
                            Branch Name: FARIDABAD<br>
                            Branch Address: Plot No. 1-a/260, Neelam Bata Road, Nit, Faridabad, Faridabad, Haryana, 121001
                        </p>
                    <a type="button" href="{{route('login_vendor')}}" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


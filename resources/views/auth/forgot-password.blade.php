<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title></title>

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
        <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

        <!-- PLUGINS CSS STYLE -->
        <link href=" {{asset('backend/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
        <link href=" {{asset('backend/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
        <link href=" {{asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet" />
        <link href=" {{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
        <link href=" {{asset('backend/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
        <link href=" {{asset('backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
        <link href=" {{asset('backend/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

        <!-- SLEEK CSS -->
        <link id="sleek-css" rel="stylesheet" href="{{asset('backend/assets/css/sleek.css')}}" />



        <!-- FAVICON -->
        <link href="{{asset('backend/assets/img/favicon.png')}}" rel="shortcut icon" />


        <script src="{{asset('backend/assets/plugins/nprogress/nprogress.js')}}"></script>
    </head>

</head>

<body class="bg-light-gray" id="body">
    <div class="container d-flex flex-column justify-content-between vh-100">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="app-brand">

                        </div>

                    </div>
                    <div class="card-body p-5">

                        <h4 class="text-dark mb-5">Reset Password</h4>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="alert alert-primary" role="alert">
                                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                            </div>
                            <!-- Email Address -->
                            <div class="form-group col-md-12 mb-4">
                                <input type="email" class="form-control input-lg" id="email" name="email" aria-describedby="emailHelp" required autofocus placeholder="Email">
                            </div>


                            <div class="col-md-12">

                                <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Email Password Reset Link</button>

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
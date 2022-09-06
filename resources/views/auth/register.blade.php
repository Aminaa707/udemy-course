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

                    </div>
                    <div class="card-body p-5">
                        <h4 class="text-dark mb-5">Sign Up</h4>


                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row">
                                <!-- Name -->
                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" class="form-control input-lg" id="name" aria-describedby="nameHelp" name="name" placeholder="Name" required autofocus>
                                </div>

                                <!-- User Name -->
                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" class="form-control input-lg" id="username" aria-describedby="nameHelp" name="username" placeholder="username" required autofocus>
                                </div>

                                <!-- Email Address -->

                                <div class="form-group col-md-12 mb-4">
                                    <input type="email" class="form-control input-lg" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                                </div>

                                <!-- Password -->

                                <div class="form-group col-md-12 ">
                                    <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password" required>
                                </div>

                                <!-- Confirm Password -->


                                <div class="form-group col-md-12 ">
                                    <input type="password" class="form-control input-lg" id="cpassword" name="password_confirmation" placeholder="Confirm Password" required>
                                </div>



                                <div class="col-md-12">
                                    <div class="d-inline-block mr-3">
                                        <label class="control control-checkbox">
                                            <input type="checkbox" required />
                                            <div class="control-indicator"></div>
                                            I Agree the terms and conditions
                                        </label>

                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign Up</button>
                                    <p>Already have an account?
                                        <a class="text-blue" href="{{route('login')}}">Sign in</a>
                                    </p>
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
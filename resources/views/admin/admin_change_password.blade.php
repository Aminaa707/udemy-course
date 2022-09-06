@extends ('admin.admin_master')
@section ('admin')

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 
    ">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Update Password</h2>
            </div>

            <div class="card-body">

                @if(count($errors))
                @foreach($errors-> all() as $error)

                <p class="alert alert-dismissible fade show alert-danger">{{$error}}</p>

                @endforeach

                @endif

                <form method="POST" action="{{ route('update.password') }}" class="horizontal-form" enctype="multipart/form-data">
                    @csrf


                    <!-- Old password -->
                    <div class="form-group row">
                        <div class="col-12 col-md-3 text-start">
                            <label for="">Old password </label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="oldPassword" name="oldPassword" class="form-control" placeholder="Old Password">
                        </div>
                    </div>

                    <!-- New Password -->
                    <div class="form-group row">
                        <div class="col-12 col-md-3 text-start">
                            <label for="">New Password </label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="newPassword" name="newPassword" class="form-control" placeholder="New Password">
                        </div>
                    </div>

                    <!-- Confairm Password -->
                    <div class="form-group row">
                        <div class="col-12 col-md-3 text-start">
                            <label for="">Confairm Password </label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="confairmPassword" name="confairmPassword" class="form-control" value="" placeholder="Confairm Password">
                        </div>
                    </div>



                    <div class="form-footer pt-5 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="col-lg-2"></div>
</div>



@endsection
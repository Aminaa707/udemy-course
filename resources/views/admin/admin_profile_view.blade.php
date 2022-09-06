@extends ('admin.admin_master')
@section ('admin')


<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">

        <div class="card text-center widget-profile px-0 border-0">
            <br /> <br />
            <div class="card-img mx-auto rounded-circle  ">

                <img src="{{(!empty($adminData -> profile_img)? url('upload/admin_images/'.$adminData->profile_img) : url('upload/profile.png') )}}" alt="user image" class="img-fluid img-thumbnail">

            </div>
            <div class="card-body">
                <h4 class="py-2 text-dark">Name: {{$adminData -> name}}</h4>
                <p>User Name:{{$adminData -> username}}</p>
                <p class="mt-2">Email:{{$adminData -> email}}</p>
                <a class="btn btn-primary btn-pill btn-lg my-4" href="{{route('edit.porfile')}}">Edit Profile</a>
            </div>
        </div>

    </div>
    <div class="col-lg-3"></div>
</div>


@endsection
@extends ('admin.admin_master')
@section ('admin')

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 
    ">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Edit Profile Page</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('store.profile') }}" class="horizontal-form" enctype="multipart/form-data">
                    @csrf


                    <!-- Name -->
                    <div class="form-group row">
                        <div class="col-12 col-md-3 text-start">
                            <label for="">Name </label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="name" name="name" class="form-control" value={{$editData->name}} placeholder="Name">
                        </div>
                    </div>

                    <!-- User Name -->
                    <div class="form-group row">
                        <div class="col-12 col-md-3 text-start">
                            <label for="">User Name </label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="username" name="username" class="form-control" value={{$editData->username}} placeholder="User Name">
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group row">
                        <div class="col-12 col-md-3 text-start">
                            <label for="">Email </label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email" name="email" class="form-control" value={{$editData->email}} placeholder="Email">
                        </div>
                    </div>

                    <!-- Profile Img -->
                    <div class="form-group row">
                        <div class="col-12 col-md-3 text-start">
                            <label for="">Profile Img </label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="profile_img" name="profile_img" class="form-control">
                        </div>
                    </div>

                    <!-- Chosen Img -->
                    <div class="form-group row">
                        <div class="col-12 col-md-3 text-start">
                            <label for=""> </label>
                        </div>
                        <div class="col-12 col-md-9">
                            <div class="card-img mx-auto rounded-circle">
                                <img src="{{(!empty($editData->profile_img)? url('upload/admin_images/'.$editData->profile_img) : url('upload/no_images.png') )}}" alt="user image" width="200px">
                            </div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#profile_img').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#show_img').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection
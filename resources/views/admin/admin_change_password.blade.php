@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-7">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Change Password</h4><br>

                        @if(count($errors))
                        @foreach($errors->all() as $error)
                        <p class="alert alert-danger alert-dimissible fade show">{{ $error }}</p>

                        @endforeach

                        @endif

                        <form method="post" action="{{ route('update.password')}}">
                            @csrf
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="oldpassword" type="password" id="old_password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="newpassword" type="password" id="new_password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="confirmpassword" type="password" id="confirm_password">
                                </div>
                            </div>

                            <input type="submit" class="btn btn-info" value="Change Password">
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>



@endsection

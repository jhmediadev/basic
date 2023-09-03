@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">About Page</h4>
                        <form method="post" action="{{ route('update.slider')}}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $aboutPage->id }}">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="title" type="text" value="{{ $aboutPage->title}}" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="short_title" type="text" value="{{ $aboutPage->short_title}}" 
                                    id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Description</label>
                                <div class="col-sm-10">
                                  <textarea required="" name="short_description" class="form-control parsley-error" 
                                  rows="5" data-parsley-id="21" aria-describedby="parsley-id-21">
                                  {{ $aboutPage->short_description}}
                                  </textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Long Description</label>
                                <div class="col-sm-10">
                                        <form method="post">
                                            <textarea id="elm1" name="long_description">
                                            {{ $aboutPage->long_description}}
                                            </textarea>
                                        </form>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">About Image</label>
                                <div class="col-sm-10">
                                    <input name="about_image" type="file" id="image">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="avatar-lg" src="{{ (!empty($aboutPage->about_image)) ? 
                                    url($aboutPage->about_image) : url('uploads/smno_image.jpg') }}" alt="Card image cap">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info" value="Update About Page">
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(() => {
        $('#image').change((e) => {
            var reader = new FileReader();
            reader.onload = (e) => {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>











@endsection
@extends('admin.layouts.master')

@section('title')
Create Program Content
@endsection

@push('css')

@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @include('admin.layouts.alert')
                <div class="card ">
                    <div class="card-header card-header-rose card-header-text">
                        <div class="card-text">
                            <h4 class="card-title">Create Program Content</h4>
                        </div>
                    </div>
                    <form method="post" action="{{ route('program.store') }}" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <div class="card-body ">
                            <br>
                            <br>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Image Content</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div></div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="customFile" />
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('program.index') }}" class="btn btn-fill btn-warning"> Back </a>
                            <button type="submit" class="btn btn-fill btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{asset('assets/js/plugins/bootstrap-selectpicker.js')}}"></script>

<script>
    $(document).ready(function() {
  $('#summernote').summernote(
    {
            height: 300,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true                  // set focus to editable area after initializing summernote
    }
  );
});
    // $(function () {
    //     $("#typeMenu").change(function () {
    //         if ($(this).val() == 'child') {
    //             $("#childrow").show();
    //         } else {
    //             $("#childrow").hide();
    //         }
    //     });
    // });

</script>
@endpush

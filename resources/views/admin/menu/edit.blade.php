@extends('admin.layouts.master')

@section('title')
    Edit Menu
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
                            <h4 class="card-title">Edit Menu</h4>
                        </div>
                    </div>
                    <form method="post" action="{{ route('menu.update',$menu->id) }}" class="form-horizontal">
                        @csrf
                        <div class="card-body ">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                    <select class="selectpicker" data-style="btn btn-primary btn-round" title="Select Type" id="typeMenu" name="type">
                                        <option value="parent" {{ $menu->parent_id == 0 ? 'selected' : '' }}> Parent </option>
                                        <option value="child" {{ $menu->parent_id != 0 ? 'selected' : '' }}> Child </option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            @php
                                if($menu->parent_id == 0){
                                    $class = 'childrow';
                                }else {
                                    $class = '';
                                }
                            @endphp
                            <div class="row {{ $class }}" id="childrow">
                                <label class="col-sm-2 col-form-label">Parent</label>
                                <div class="col-sm-10">
                                    <select class="selectpicker" data-style="btn btn-primary btn-round" title="Select Parent" name="child">
                                        @foreach ($parents as $parent)
                                            <option value="{{ $parent->id }}" {{ $menu->parent_id == $parent->id ? "selected" : "" }}>{{ $parent->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="{{ $menu->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Icon</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="icon" value="{{ $menu->icon }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Url</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="url" value="{{ $menu->url }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label label-checkbox">Is Active</label>
                                <div class="col-sm-10 checkbox-radios">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="is_active" {{ $menu->is_active == true ? "checked" : "" }}> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('menu.index') }}" class="btn btn-fill btn-warning"> Back </a>
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
    $(function() {
        $('.childrow').hide();
        $("#typeMenu").change(function() {
            if($(this).val() == 'child') {
                $(".childrow").show();
                $("#childrow").show();
            }else{
                $(".childrow").hide();
                $("#childrow").hide();
            }
        });
    });
</script>
@endpush
@extends('admin.layouts.master')

@section('title')
    Edit User
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
                            <h4 class="card-title">Edit User</h4>
                        </div>
                    </div>
                    <form method="post" action="{{ route('user.update',$user->id) }}" class="form-horizontal">
                        @csrf
                        <div class="card-body ">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="email" class="form-control" value="{{ $user->email }}" disabled readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Password Confirmation</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="password_confirmation">
                                    </div>
                                </div>
                            </div>
                            @if (Sentinel::getUser()->isSuperAdmin())
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-10">
                                    <select class="selectpicker" data-style="btn btn-primary btn-round" title="Select Role" id="typeMenu" name="role">
                                        @foreach ($roles as $key => $value)
                                            <option value="{{$key}}" {{ $user->roles()->first()->slug == $key ? "selected" : '' }}>{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            @endif
                            <div class="row">
                                <label class="col-sm-2 col-form-label label-checkbox">Is Active</label>
                                <div class="col-sm-10 checkbox-radios">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="is_active" {{ $user->is_active == true ? "checked" : '' }}> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

@endpush
@extends('admin.layouts.master')

@section('title')
    Create Role
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
                            <h4 class="card-title">Create Role</h4>
                        </div>
                    </div>
                    <form method="post" action="{{ route('role.store') }}" class="form-horizontal">
                        @csrf
                        <div class="card-body ">
                            <div class="row">
                                <label class="col-sm-2 col-form-label text-center">Name</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <th>Menu Name</th>
                                    <th class="text-center" style="width: 50%;"> 
                                        @php
                                            $rolePermission = 0;
                                            $roleMenu = 1;
                                        @endphp
                                        <ul style="list-style:none">
                                            <li>
                                                <label class="form-check-label">
                                                    @if($rolePermission == $roleMenu)
                                                        <input type="checkbox" name="create-all" id="" value="1" class="form-check-input" checked>
                                                    @else
                                                        <input type="checkbox" name="create-all" id="" value="0" class="form-check-input">
                                                    @endif
                                                    Select All
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach( $permissions as $key => $permission )
                                        @if( $permission['parent_id'] == 0)
                                            @php
                                                $childs = define_child($permission['id']);
                                                $permission_val = 0;
                                                $myrole = 0;
                                            @endphp
                                            @if($permission['slug'] != 'dashboard')
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                {{ $permission['name'] }}
                                                                <ul>
                                                                    @foreach($childs as $child)
                                                                        <li>{{ ucfirst($child->name) }}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="text-center">
                                                        <ul style="list-style:none">
                                                            <li>
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input create-box parent" type="checkbox" name="permissions[{{$permission['slug']}}]" value="{{$permission_val}}" data-id="{{ $permission['slug'] }}"> 
                                                                    @if($permission_val == 1)
                                                                        <label class="badge badge-pill badge-success">Active</label>
                                                                    @else
                                                                        <label class="badge badge-pill badge-danger">InActive</label>
                                                                    @endif
                                                                    <span class="form-check-sign">
                                                                    <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </li>
                                                            @foreach($childs as $child)
                                                                <li>
                                                                    <label class="form-check-label">
                                                                        <input class="create-box form-check-input child-{{$permission['slug']}}" type="checkbox" name="permissions[{{$child->slug}}]" value="{{permission_val($myrole,$child->slug)}}" data-id="{{ $permission['slug'] }}"> 
                                                                        @if(permission_val($myrole,$child->slug) == 1)
                                                                            <label class="badge badge-pill badge-success">Active</label>
                                                                        @else
                                                                            <label class="badge badge-pill badge-danger">InActive</label>
                                                                        @endif
                                                                        <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                        </span>
                                                                    </label>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('role.index') }}" class="btn btn-fill btn-warning"> Back </a>
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
<script type="text/javascript">
    $( 'input[name=create-all]' ).on('click',function(){
      $(".create-box").prop('checked', $(this).prop('checked'));
      $(".create-box").each(function(n,v){
        if ($(this).prop('checked')){
          $(this).val(1);
          $(this).parent().find('label').removeClass('badge-danger').addClass('badge-success');
          $(this).parent().find('label').html('Active');
        } else {
          $(this).val(0);
          $(this).parent().find('label').removeClass('badge-success').addClass('badge-danger');
          $(this).parent().find('label').html('InActive');
        }
      });
    });
    
    $(document).on('change',".create-box",function(){
      var count_active = 0;
      var count_inactive = 0;
      var active = 0;
      var inactive = 0;
      var base = $(".create-box").length;
      var _this = $(this);
      if (_this.prop('checked')){
        _this.val(1);
        console.log("sini");
        _this.parent().find('label').removeClass('badge-danger').addClass('badge-success');
        _this.parent().find('label').text('Active');
    
        if (_this.hasClass('parent')) {
          var parent = _this.data('id');
          $(".child-"+parent+"").each(function(){
            $(this).parent().find('label').removeClass('badge-danger').addClass('badge-success');
            $(this).parent().find('label').text('Active');
            $(this).prop('checked',true);
            $(this).val(1);
          });
        }
    
      } else {
        _this.val(0);
        _this.parent().find('label').removeClass('badge-success').addClass('badge-danger');
        _this.parent().find('label').text('InActive');
    
        if (_this.hasClass('parent')) {
          var parent = _this.data('id');
          $(".child-"+parent+"").each(function(){
            $(this).parent().find('label').removeClass('badge-success').addClass('badge-danger');
            $(this).parent().find('label').text('InActive');
            $(this).prop('checked',false);
            $(this).val(0);
          });
        }
    
      }
    
      $(".create-box").each(function(k){
        if ($(this).parent().find('label').text() == 'Active'){
          active = k;
        }
    
        if($(this).parent().find('label').text() == 'InActive'){
          inactive = k;
        }
    
      });
    
      if (inactive == 0) {
        $( 'input[name=create-all]' ).prop('checked',true);
      } else {
        $( 'input[name=create-all]' ).prop('checked',false);
      }
    
    });
    </script>
@endpush
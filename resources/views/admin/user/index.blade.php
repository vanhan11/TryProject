@extends('admin.layouts.master')

@section('title')
    Users Management
@endsection

@push('css')
<style src="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"></style>
@endpush

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-xxl-12">
      <!--begin::Advance Table Widget 9-->
      @include('admin.layouts.alert')
      <div class="card card-custom card-stretch gutter-b">
        <!--begin::Header-->
        
        <div class="card-header border-0 py-5">
          
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">User Management</span>
          </h3>
          <div class="card-toolbar">
            @if(Sentinel::getUser()->inRole('super-admin'))
              <a href="{{ route('user.create') }}" class="btn btn-success font-weight-bolder font-size-sm">Create</a>
            @endif
          </div>
        </div>
        <div class="card-body pt-0 pb-3">
          <table class="table table-bordered mt-10 w-100" id="datatables">
            <thead>
              <tr class="text-left">
                <th>Email</th>
                <th>Name</th>
                <th>Role</th>
                <th> Created at </th>
                @if(Sentinel::getUser()->inRole('super-admin'))
                  <th class="disabled-sorting">Actions</th>
                @endif
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
                <tr>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->roles[0]->name }}</td>
                  <td>{{ $item->created_at }}</td>
                  @if(Sentinel::getUser()->inRole('super-admin'))
                    <td>
                      <a href="{{ route('user.edit',$item->id) }}" class="btn btn-link btn-info btn-just-icon">
                          <i class="fa fa-pencil-alt"></i>
                      </a>
                      <a href="#" data-href="{{ route('user.delete',$item->id) }}" class="btn btn-link btn-danger btn-just-icon" id="deleteModal">
                          <i class="fa fa-trash"></i>
                      </a>
                    </td>
                  @endif
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

@include('admin.layouts.delete_form')
<script>
  $(document).ready(function() {
    $('#datatables').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [5, 10, 25, -1],
        [5, 10, 25, "All"]
      ],
      responsive: true,
    });
  });
</script>
@endpush
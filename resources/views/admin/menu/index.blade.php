@extends('admin.layouts.master')

@section('title')
    Menu Management
@endsection

@push('css')
    <style src="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"></style>

@endpush

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-xxl-12">
      @include('admin.layouts.alert')
      <!--begin::Advance Table Widget 9-->
      <div class="card card-custom card-stretch gutter-b">
        <!--begin::Header-->
        <div class="card-header border-0 py-5">
          
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Menu Management</span>
          </h3>
          <div class="card-toolbar">
            <a href="{{ route('menu.create') }}" class="btn btn-success font-weight-bolder font-size-sm">Create</a>
          </div>
        </div>
        <div class="card-body pt-0 pb-3">
          <table class="table table-bordered mt-10 w-100" id="datatables">
            <thead>
              <tr class="text-left">
                <th>Name</th>
                <th>Type</th>
                <th>Slug</th>
                <th>Is Active</th>
                <th class="disabled-sorting">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>
                        @if($item->parent_id == 0)
                          <span class="badge badge-success badge-pills"> Parent </span>
                        @else
                          <span class="badge badge-warning badge-pills"> Child </span>
                        @endif
                    </td>
                    <td>{{ $item->slug }}</td>
                    <td>
                      @if($item->is_active == 1)
                        <span class="label label-lg font-weight-bolder label-rounded label-success"> <i class="fa fa-check text-white"></i> </span>
                      @else
                        <span class="label label-lg font-weight-bolder label-rounded label-warning"> <i class="fa fa-times text-white"></i> </span>
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('menu.edit',$item->id) }}" class="btn btn-link btn-info btn-just-icon">
                          <i class="fa fa-pencil-alt"></i>
                      </a>
                      <a href="#" data-href="{{ route('menu.delete',$item->id) }}" class="btn btn-link btn-danger btn-just-icon" id="deleteModal">
                          <i class="fa fa-trash"></i>
                      </a>
                    </td>
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
@include('admin.layouts.delete_form')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

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
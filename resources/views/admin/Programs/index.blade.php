@extends('admin.layouts.master')

@section('title')
    Program Management
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
            <span class="card-label font-weight-bolder text-dark">Program Management</span>
          </h3>
          <div class="card-toolbar">
            <a href="{{ route('program.create') }}" class="btn btn-success font-weight-bolder font-size-sm">Create</a>
          </div>
        </div>
        <div class="card-body pt-0 pb-3">
          <table class="table table-bordered mt-10 w-100 text-center" id="datatables">
            <thead>
              <tr class=" text-center">
                <th>Ttitle</th>
                {{-- <th>Type</th> --}}
                <th>Image</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th class="disabled-sorting sorting">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td class=" al " >
                      <img width="100px" src="{{ url('/upload/'.$item->image) }}">
                    </td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                      <a href="{{ route('program.edit',$item->id) }}" class="btn btn-link btn-info btn-just-icon">
                          <i class="fa fa-pencil-alt"></i>
                      </a>
                      <a href="#" data-href="{{ route('program.delete',$item->id) }}" class="btn btn-link btn-danger btn-just-icon" id="deleteModal">
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
@extends('admin.layouts.master')

@section('title')
    Contact
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
            <span class="card-label font-weight-bolder text-dark">Feed Back</span>
          </h3>
          {{-- <div class="card-toolbar">
            <a href="{{ route('blog.create') }}" class="btn btn-success font-weight-bolder font-size-sm">Create</a>
          </div> --}}
        </div>
        <div class="card-body pt-0 pb-3">
          <table class="table table-bordered mt-10 w-100 text-center" id="datatables">
            <thead>
              <tr class=" text-center">
                <th>Name</th>
                <th>Email</th>
                {{-- <th>Image</th> --}}
                <th>message</th>
                <th>sent date at</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td class=" al " >
                        {{ $item->email }}
                    </td>
                    <td class="text-truncate" data-toggle="tooltip" data-html="true" title="{{ $item->message }}" >{{ substr(strip_tags($item->message),0,20)."..." }}</td>
                    
                    <td>{{ $item->created_at }}</td>
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
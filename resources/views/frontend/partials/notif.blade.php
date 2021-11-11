
{{-- Error general --}}
@if(Session::has('error'))
<script>
  Swal.fire({
  icon: 'error',
  title: "{{ Session::get('error') }}",
  text: 'Something went wrong!',
})
</script>
@endif

{{-- Success general --}}
@if(Session::has('success'))
<script>
  Swal.fire({
  icon: 'success',
  title: "{{ Session::get('success') }}",
  showConfirmButton: false,
  timer: 3500
  
})
</script>
@endif

{{-- Error Validation --}}
{{-- @if($errors->any())
<script>
  Swal.fire(
  'Information',
  "{{ $errors->all() }}",
  'question'
)
</script>
@endif --}}

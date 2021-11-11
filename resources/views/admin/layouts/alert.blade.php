{{-- Error general --}}
@if(Session::has('error'))
<div class="alert alert-custom alert-notice alert-light-danger fade show" role="alert">
    <div class="alert-icon"><i class="flaticon-warning"></i></div>
    <div class="alert-text">{{ Session::get('error') }}</div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="ki ki-close"></i></span>
        </button>
    </div>
</div>
@endif

{{-- Success general --}}
@if(Session::has('success'))
<div class="alert alert-custom alert-notice alert-light-primary fade show" role="alert">
    <div class="alert-icon"><i class="flaticon-warning"></i></div>
    <div class="alert-text">{{ Session::get('success') }}</div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="ki ki-close"></i></span>
        </button>
    </div>
</div>
@endif

{{-- Error Validation --}}
@if($errors->any())
<div class="alert alert-custom alert-notice alert-light-danger fade show" role="alert">
    <div class="alert-icon"><i class="flaticon-warning"></i></div>
    @foreach ($errors->all() as $err)
        <div class="alert-text">* {{ $err }}</div>
    @endforeach
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="ki ki-close"></i></span>
        </button>
    </div>
</div>
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/favicon.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/favicon.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/favicon.png') }}" sizes="72x72">
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/favicon.png') }}" sizes="144x144">
  
    <meta http-equiv="cleartype" content="on">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('meta')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @include('frontend.layouts.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.all.min.js" ></script>
    <script src="{{asset('assets/frontend/js/libs/modernizr.js')}}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    {!! NoCaptcha::renderJs() !!}
    <script src="https://www.jquery-az.com/javascript/alert/dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://www.jquery-az.com/javascript/alert/dist/sweetalert.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('G_TAGMANAGER') }}"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
    
        gtag('config',  "{{ env('G_TAGMANAGER') }}");
      </script>
      <style>
        .dropbtn {
          border: none;
          cursor: pointer;
        }
        
      
        .dropdown {
          position: relative;
          display: inline-block;
        }
        
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #ffffff;
          min-width: 130px;
          min-height: 100px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }
        
        .dropdown-content a {
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }
        
        .dropdown:hover .dropdown-content {
          display: block;
        }

        @media only screen and (max-width: 300px) {
          .main-response{
            font-size: 18px !important;
          }

        }
      </style>
</head>

<body data-colorTheme="">
    @include('frontend.partials.navbar')
    @yield('content')
    @include('frontend.partials.footer')
</body>
<script src="{{asset('assets/frontend/js/libs/require.js')}}" data-main="{{asset('assets/frontend/js/index.js')}}"></script> 
<script>
function confirmation() {
  Swal.fire({
  title: '<strong>HTML <u>example</u></strong>',
  icon: 'info',
  html:
    'You can use <b>bold text</b>, ' +
    '<a href="//sweetalert2.github.io">links</a> ' +
    'and other HTML tags',
  showCloseButton: true,
  showCancelButton: true,
  focusConfirm: false,
  confirmButtonText:
    '<i class="fa fa-thumbs-up"></i> Great!',
  confirmButtonAriaLabel: 'Thumbs up, great!',
  cancelButtonText:
    '<i class="fa fa-thumbs-down"></i>',
  cancelButtonAriaLabel: 'Thumbs down'
})
});
</script>
</html>

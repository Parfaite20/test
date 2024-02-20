
<!DOCTYPE html>
<html lang="zxx" class="no-js">


<!-- Mirrored from themewagon.github.io/karma/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jun 2023 13:06:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Biblioteque</title>

	@include('liens.lien_css')
	@yield('css')
	@livewireStyles

</head>

<body>

	<!--page loader-->
     <div class="loader-wrapper">
      <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
        <div class="spinner-border text-dark" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
     </div>
   <!--end loader-->

   @include('layouts.head')

        {{$slot}}



<!--Start Back To Top Button-->
  <a href="javaScript:;" class="back-to-top"><i class="bi bi-arrow-up"></i></a>
<!--End Back To Top Button-->
@include('layouts.foot')

@include('liens.lien_js')
@livewireScripts

</body>

</html>

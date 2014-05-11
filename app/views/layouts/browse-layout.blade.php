<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Ridisaster | Browse Assets</title> 
	<link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/foundation.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/browse.css') }}">
	<script src="assets/js/vendor/modernizr.js"></script> 
</head>
<body style="background:#333333;">
	@include('../commons/offcanvas')

	<script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
	<script src="{{ asset('assets/js/foundation.min.js') }}"></script>
	<script> 
		$(document).foundation();
	</script>
</body>
</html>
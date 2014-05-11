<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to Ridisastir | Home</title>
<link rel="stylesheet" href="{{ asset('assets/css/animation.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/foundation.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
<script src="{{ asset('assets/js/vendor/modernizr.js') }}"></script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
    @yield('content')

<script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
<script src="{{ asset('assets/js/foundation.min.js') }}"></script>
<script src="{{ asset('assets/js/home.js') }}"></script>

<script>
$(document).foundation();
</script>
<script>
	$(window).scroll(function() {
		$('#animatedElement').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("pulse");
			}
		});
	});
</script>

<script>
	$('#animatedElement').click(function() {
		$(this).addClass("pulse");
	});
</script>
</body>
</html>
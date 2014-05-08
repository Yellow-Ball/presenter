<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Yellowball Meeting Room Slides</title>

	<link rel="stylesheet" href="{{ URL::asset('css/slide_default.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/reveal.css') }}">
</head>
<body>
	<div class="reveal">
		<div class="slides">
			<section class="defaultContainer">
				<img src="http://weareyellowball.com/public/app/img/logo-black.png" alt="">
			</section>
		</div>
	</div>

	<!--[if lt IE 9]>
	<script src="lib/js/html5shiv.js"></script>
	<![endif]-->

	{{ HTML::script( URL::asset('js/jquery-1.10.2.js') ) }}
	{{ HTML::script( URL::asset('js/head.min.js') ) }}
	{{ HTML::script( URL::asset('js/reveal.js') ) }}
	{{ HTML::script( URL::asset('js/slide.js') ) }}
</body>
</html>
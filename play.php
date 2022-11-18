<!DOCTYPE HTML>
<html>

<head>
	<title>Free Corn Videos - CornHub</title>
	<meta name="description" content="CornHub is the number one site for Corn Pictures and Videos.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
	<link rel="manifest" href="/icons/site.webmanifest">
	<link rel="mask-icon" href="/icons/safari-pinned-tab.svg" color="#000000">
	<link rel="shortcut icon" href="/favicon.ico">
	<meta name="msapplication-TileColor" content="#000000">
	<meta name="msapplication-config" content="/icons/browserconfig.xml">
	<meta name="theme-color" content="#000000">
	<script async src="https://arc.io/widget.min.js#4JWmgJn7?CDN=false"></script>
</head>

<body>
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />
<script src="https://cdn.plyr.io/3.6.2/plyr.polyfilled.js"></script>
<a href="/"><img src="https://chcdn.webwevers.nl/i/logo.png"></a>
<div style="width: 50vw;">
	<video controls crossorigin playsinline data-poster="https://chcdn.webwevers.nl/t/000001.png" id="player" style="--plyr-color-main: #ffa31a;">
		<!-- Video files -->
		<source src="https://chcdn.webwevers.nl/v/000001_360.mp4" type="video/mp4" size="360" />
		<source src="https://chcdn.webwevers.nl/v/000001_540.mp4" type="video/mp4" size="540" />
		<source src="https://chcdn.webwevers.nl/v/000001_720.mp4" type="video/mp4" size="720" />
		<source src="https://chcdn.webwevers.nl/v/000001_1080.mp4" type="video/mp4" size="1080" />
	</video>
	<h1 style="color: #ffa31a;">Young cornstars get hot in pool corgy!</h1>
</div>
<script>
	const player = new Plyr('#player', {
		'controls': ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'captions', 'settings', 'pip', 'airplay', 'fullscreen'],
		'quality': {
			default: 720,
			options: [1080, 720, 540, 360]
		}
	});
</script>
<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"><img src="https://chcdn.webwevers.nl/a/a728.jpg" style="width: 300px;"></a>
<div style="margin-left: 50px; margin-top: 50px;"><a href="/faq.php">FAQ</a> <a href="https://www.instagram.com/cornhub.website" target="_blank">Instagram</a> <a href="https://www.tiktok.com/@cornhub.website" target="_blank">TikTok</a> <a href="https://go.cornhub.website/discord" target="_blank">Discord</a></div>
</body>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

	html {
		background: black;
		background-size: cover;
		font-family: 'Roboto', sans-serif;
		color: white;
	}

	.box {
		background: #222222;
		opacity: 0.75;
		position: fixed;
		left: 0;
		right: 0;
		top: 0;
		bottom: 0;
	}

	.message {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background: #000000;
		opacity: 1;
		color: white;
		text-align: center;
		width: 33vw;
		padding: 1vw;
	}

	a,
	a:active,
	a:visited {
		color: white !important;
	}

	@media (max-width: 800px) {
		.message {
			width: 75vw;
		}
	}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128990208-5"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'UA-128990208-5');
</script>
<script>
	$(function() {
		$('.thumb').hover(function() {
			$(this).attr('src', $(this).data('animated'));
		}, function() {
			$(this).attr('src', $(this).data('still'));
		});
	});
</script>

</html>

<!doctype html>
<html lang="en">

<head>
	<!-- // Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Required meta tags // -->

    <meta name="description" content="Login and Register Form HTML Template - developed by 'ceosdesigns' - sold exclusively on 'themeforest.net'">
	<meta name="author" content="Dragbox">

    <title>Dragbox . Adminstrative</title>

	<!-- // Favicon -->
	<link href="{{ asset('Auth/images/favicon.png') }}" rel="icon">
	<!-- Favicon // -->

	<!-- // Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;display=swap" rel="stylesheet">
	<!-- Google Web Fonts // -->
	
	<!-- // Font Awesome 5 Free -->
	<link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" rel="stylesheet">
	<!-- Font Awesome 5 Free // -->

    <!-- // Template CSS files -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset('Auth/css/styles.css') }}" rel="stylesheet">
	<!-- Template CSS files  // -->
</head>
@yield('title')
<body>
	
@yield('content')
	
	
	<!-- // Vendor JS files -->
	<script src="{{ asset('Auth/js/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ asset('Auth/js/bootstrap.bundle.min.js') }}"></script>
	<!-- Vendor JS files // -->

	<!-- Template JS files // -->
	<script src="{{ asset('Auth/js/script.js') }}"></script>
	<!-- Template JS files // -->

	<!-- ======================================================= -->
	<!-- // Setting to allow preview of different color variants -->
	<!-- ======================================================= -->
	<div id="settings" style="position: fixed; top: 20%; right: 0%; width: 40px; height: 40px; background-color: #000; color: #fff; display: flex; align-items: center; justify-content: center; cursor: pointer;">
		<i class="fas fa-cog"></i>
		<div id="colors" style="position: absolute; top: 40px; left: 40px; width: 40px; height: 240px; background-color: #000;">
			<a id="blue" href="#" style="display: block; width: 40px; height: 40px; background-color: #007bff;"></a>
			<a id="beige" href="#" style="display: block; width: 40px; height: 40px; background-color: #eab8a9;"></a>
			<a id="burgundy" href="#" style="display: block; width: 40px; height: 40px; background-color: #af102e;"></a>
			<a id="fuchsia" href="#" style="display: block; width: 40px; height: 40px; background-color: #600da8;"></a>
			<a id="turquoise" href="#" style="display: block; width: 40px; height: 40px; background-color: #50c8cc;"></a>
			<a href="https://nimoy.ceosdesigns.sk/index.html" style="display: block; width: 40px; height: 40px; background-color: #000; color: #fff; display: flex; align-items: center; justify-content: center;"><i class="fas fa-home"></i></a>
		</div>
	</div>

	<script>
		let tmpLocation = window.location.href;
		let tmpEndLocation = tmpLocation.split("https://nimoy.ceosdesigns.sk/");
		let targetLocation = tmpEndLocation[tmpEndLocation.length-1];
		targetLocation = targetLocation.replace(".html","").replace("#", "");
		let targetLocationArray = [];

		if(targetLocation.includes("_")){
			targetLocationArray = targetLocation.split("_");
			targetLocationArray[1] = "_" + targetLocationArray[1];
		}
		else {
			targetLocationArray[0] = targetLocation;
			targetLocationArray[1] = "";
		}

		let l = document.links;
		for(let i=0; i<l.length; i++) {
			let tmp = l[i].attributes.href.nodeValue;
			l[i].attributes.href.nodeValue = tmp.replace("recover","recover" + targetLocationArray[1]).replace("login","login" + targetLocationArray[1]).replace("signup","signup" + targetLocationArray[1]);
		}

		document.getElementById("blue").setAttribute('href',"./" + targetLocationArray[0] + ".html");
		document.getElementById("beige").setAttribute('href',"./" + targetLocationArray[0] + "_1.html");
		document.getElementById("burgundy").setAttribute('href',"./" + targetLocationArray[0] + "_2.html");
		document.getElementById("fuchsia").setAttribute('href',"./" + targetLocationArray[0] + "_3.html");
		document.getElementById("turquoise").setAttribute('href',"./" + targetLocationArray[0] + "_4.html");

		document.getElementById("colors").style.transition = 'all 0.2s';
		document.getElementById("settings").addEventListener("click", () =>{
			let leftPosition = document.getElementById("colors").style.left;

			if(leftPosition == '40px'){
				document.getElementById("colors").style.left = '0px';
			}
			else {
				document.getElementById("colors").style.left = '40px';
			}
		});
	</script>
	<!-- ======================================================= -->
	<!-- Setting to allow preview of different color variants // -->
	<!-- ======================================================= -->
</body>


</html>
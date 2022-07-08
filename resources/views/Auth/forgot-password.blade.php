<!doctype html>
<html lang="en">
<head>
	<!-- // Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Required meta tags // -->

    <meta name="description" content="Login and Register Form HTML Template - developed by 'ceosdesigns' - sold exclusively on 'themeforest.net'">
	<meta name="author" content="ceosdesigns.sk">

    <title>Dragbox | Forgot Password</title>

	<!-- // Favicon -->
    <link href="{{ asset('dragbox.png')}}" rel="icon">
	<!-- Favicon // -->

	<!-- // Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;display=swap" rel="stylesheet">
	<!-- Google Web Fonts // -->
	
	<!-- // Font Awesome 5 Free -->
	<link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" rel="stylesheet">
	<!-- Font Awesome 5 Free // -->

    <!-- // Template CSS files -->
	<link href="{{ asset('Auth/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('Auth/css/styles.css') }}" rel="stylesheet">
	<!-- Template CSS files  // -->
</head>
<body>
	

	<main class="d-flex">
		<div class="container main-container">
			<div class="row nm-row">
			
				<div class="col-md-5">
					<div class="card">
						<div class="card-content">
							
							<form method="post" action="{{ route('auth.recover-password') }}">
                              @csrf
								<div class="form-group">
									<!-- <label for="inputEmail">Email</label> -->
									<div class="input-group nm-gp">
										<input id="inputEmail" name="email" class="form-control" type="email" tabindex="1" placeholder="Enter your  account email">
									</div>
								</div>	
								@include('Includes.messages')
								<div class="d-flex nm-jcb nm-mb-1 nm-mt-1">
									<a class="nm-ft-b" href="{{ route('login') }}">Remember?</a>
								</div>
								<button type="submit" class="btn btn-block btn-primary nm-btn">Proceed</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	
    <!-- // Vendor JS files -->
	<script src="{{ asset('Auth/js/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ asset('Auth/js/bootstrap.bundle.min.js') }}"></script>
	<!-- Vendor JS files // -->

	<!-- Template JS files // -->
	<script src="{{ asset('Auth/js/script.js') }}"></script>
	<!-- Template JS files // -->

	

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

</body>

</html>
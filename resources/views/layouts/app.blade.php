<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<!-- links to the css styling in public folder app.css file contains all of the compiled css/bootstrap styling-->
<link rel="stylesheet" href="css/app.css" >

	<title>Beth's Basic Website</title>
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		<div class ="row">
			<!-- using bootstrap grid system with 8 columns -->
			<div class="col-md-8 col-lg-8">
				  <!-- yield is where out templates-views will be rendered -->
				  @yield('content')
			</div>
			<!-- using bootstrap grid system with 4 columns -->
			<div class="col-md-4 col-lg-4">
					@include('inc._sidebar')
			</div>
		</div>
	</div>
	<!-- <script src="main.js"></script> -->
	</body>
</html>
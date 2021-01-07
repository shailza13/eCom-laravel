<!DOCTYPE html>
<html>
<head>
	<title>E-Com Project</title>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
	.custom-login
	{
		height: 500px;
		padding-top:  100px; 
	}
	img.slider-img{
		height: 400px !important;
	}
	.custom-product{
		height: 600px;
	}
	.slider-text{
		background-color: #87ceeb85 !important;
	}
	.trending-img{
		height: 100px;
	}
	.trending-item{
		float: left;
		width: 20%;
	}
	.trending-wrapper{
		margin:20px;
	}
	.detail-img{
		height: 200px;
	}
	.search-box{
		width: 500px !important;
	}
</style>
</head>
<body>
	{{ View::make('header') }}
	@yield('content')
	{{ View::make('footer') }}
</body>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>
	<title>{{$title}}</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style>
    .table-text:hover .descript{
	display: block;
	border: 1px solid #ccc;
	padding: 5px;
	margin-left: 30px; 
	width: 300px;
	background-color: #ff0;
    }
    #logo{
	margin: 5px;
	width: 128px;
	
    }
    #big_logo{
	margin: 5px;
	width: 512px;
	position: absolute;
	top: -210px;
	left: 512px;
	z-index: 1;
    }
</style>
    </head>

    <body>
	<div>
	    <a href=""><img id="logo" src="http://brend-cs.ru/_ld/22/51001925.png" alt="logo"/></a>
	</div>
	<div class="container">
	    <a href=""><img id="big_logo" src="http://www.coolday.by/wp-content/uploads/2015/07/simpson_gomer_sleep.png" alt="logo" width="100%"/></a>
	    <nav class="navbar navbar-default">
		<!-- Содержимое Navbar -->
	    </nav>
	</div>

	@yield('content')
    </body>
</html>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="gestion, salles de classe, gestion de salles">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <title>Gestion des salles</title>


    <!-- <link rel="shortcut icon" href="assets/images/gt_favicon.png"> -->
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> -->
</head>
<body>

    @include('layouts/partials/_navbar')

    @yield('header')

    @yield('content')

  

    @include('layouts/partials/_footer')



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrap.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/headroom.min.js"></script>
<script src="assets/js/jQuery.headroom.min.js"></script>
<script src="assets/js/template.js"></script>
    <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
</body>
</html>
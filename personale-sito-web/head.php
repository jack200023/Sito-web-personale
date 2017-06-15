<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>index.php</title>

    <!-- Bootstrap core CSS -->
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href="css/bar navigation.css"  type="text/css"  rel="stylesheet">
	
	<!-- font righe "hr" -->
	<link href="css/font hr.css"  type="text/css"  rel="stylesheet">
	<!-- chiuso -->
	
	<!-- tag li -->
	<link href="css/tag li.css"  type="text/css"  rel="stylesheet">
	<!-- chiuso -->
	
	<!-- tag p -->
	<link href="css/tag p.css"  type="text/css"  rel="stylesheet">
	<!-- chiuso -->
	
	<!-- tag ul -->
	<link href="css/tag ul.css"  type="text/css"  rel="stylesheet">
	<!-- chiuso -->
	
</head>
	<body>
		<div id="wrapper" class="container">
		<header>
			<nav>
				<ul id="ul01">
					<li<?php if ($title == "Home") { print ' class="active"';}?>><a href="index.php">Home</a></li>
					<li<?php if ($title == "News") { print ' class="active"';}?>><a href="pagina1.php">News</a></li>
				</ul>
			</nav>
		</header>
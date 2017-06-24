<?php require "../login/loginheader.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Draw & Guess</title>

	<!-- jquery is required -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/drawingboard.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../css/drawingboard.min.css" rel="stylesheet" type="text/css">
    <style>
        #draw-board {
            width: 700px;
            height: 400px;
        }
    </style>
</head>
<body>
    <!-- here start the nav-bar -->
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.html">My Love Story</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="../home.php">Home</a></li>
                <li class="active"><a href="#">Draw & Guess</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Me <span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                        <li><a href="../login/logout.php">Log out</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

	<!--<h1>The default DrawingBoard</h1> -->
    <div class="container">
            <div id="draw-board"></div>
    </div>

	<script type="text/javascript">
		var defaultBoard = new DrawingBoard.Board('draw-board');
	</script>
</body>
</html>

<?php require "login/loginheader.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- TimeLine -->
    <link rel="stylesheet" href="css/timeline.css">
    <link rel="stylesheet" href="css/fonts/font.default.css">
    <script src="js/timeline-min.js"></script>

</head>
<body>
<!-- here start the nav-bar -->
<nav class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1"
                aria-expanded="false">
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">My Love Story</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="smartMenu/index.php">Smart Menu</a></li>
            <li><a href="draw/index.php">Draw & Guess</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">Me <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                    <li><a href="login/logout.php">Log out</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<!-- container -->
<div class="container">
    <div id='timeline' style="width: 100%; height: 500px"></div>
</div>

<!-- Time Line -->
<script>
    var options = {
        hash_bookmark: true,
        language: "zh-cn"
    };
    // two arguments: the id of the Timeline container (no '#')
    // and the JSON object or an instance of TL.TimelineConfig created from
    // a suitable JSON object
    window.timeline = new TL.Timeline('timeline', 'timeline/timeline3.json', options);
</script>

</body>
</html>

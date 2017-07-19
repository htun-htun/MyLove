<?php require "../login/loginheader.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Smart Menu</title>

	<!-- jquery is required -->
	<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--    bootstrap table-->
    <script type="text/javascript" src="../js/bootstrap-table.min.js"></script>
    <link href="../css/bootstrap-table.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="../js/bootstrap-table-zh-CN.min.js"></script>
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
                <li class="active"><a href="#">Smart Menu</a></li>
                <li><a href="../draw/index.php">Draw & Guess</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Me <span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                        <li><a href="../login/logout.php">Log out</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div id="toEat" class="alert alert-info" role="alert"></div>
    </div>

	<!--<h1>Here is the menu</h1> -->
    <div class="container">
        <table id="table"></table>
    </div>

    <script type="text/javascript">
        var toEat = $("#toEat");
        $.getJSON ("menu.json", function (data){
            var index = Math.floor(Math.random() * data.length);
            toEat.append("您今天应该吃：<b>" + data[index].restaurant + " - " + data[index].food + "</b>");
        });


        var $table = $('#table');
        $table.bootstrapTable({
            url: 'menu.json',
            pagination: 'true',
            search: 'true',
            searchOnEnterKey: 'true',
            showColumns: 'true',
            showRefresh: 'true',
            sortName: 'restaurant',
            striped: 'true',
            columns: [{
                align: 'center',
                field: 'restaurant',
                sortable: 'true',
                title: '餐厅'
            }, {
                align: 'center',
                field: 'food',
                sortable: 'true',
                title: '美食'
            }]
        });
    </script>
</body>
</html>

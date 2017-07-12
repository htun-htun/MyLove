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

	<!--<h1>The default DrawingBoard</h1> -->
    <div class="container">
        <table id="eventsTable"
               data-toggle="table"
               data-height="300"
               data-url="https://api.github.com/users/wenzhixin/repos?type=owner&sort=full_name&direction=asc&per_page=100&page=1"
               data-pagination="true"
               data-search="true"
               data-show-refresh="true"
               data-show-toggle="true"
               data-show-columns="true"
               data-toolbar="#toolbar">
            <thead>
            <tr>
                <th data-field="state" data-checkbox="true"></th>
                <th data-field="name">Name</th>
                <th data-field="stargazers_count">Stars</th>
                <th data-field="forks_count">Forks</th>
                <th data-field="description">Description</th>
            </tr>
            </thead>
        </table>
    </div>

    <script type="text/javascript">
        $(function () {
            var $result = $('#eventsResult');

            $('#eventsTable').on('all.bs.table', function (e, name, args) {
                console.log('Event:', name, ', data:', args);
            })
                .on('click-row.bs.table', function (e, row, $element) {
                    $result.text('Event: click-row.bs.table');
                })
                .on('dbl-click-row.bs.table', function (e, row, $element) {
                    $result.text('Event: dbl-click-row.bs.table');
                })
                .on('sort.bs.table', function (e, name, order) {
                    $result.text('Event: sort.bs.table');
                })
                .on('check.bs.table', function (e, row) {
                    $result.text('Event: check.bs.table');
                })
                .on('uncheck.bs.table', function (e, row) {
                    $result.text('Event: uncheck.bs.table');
                })
                .on('check-all.bs.table', function (e) {
                    $result.text('Event: check-all.bs.table');
                })
                .on('uncheck-all.bs.table', function (e) {
                    $result.text('Event: uncheck-all.bs.table');
                })
                .on('load-success.bs.table', function (e, data) {
                    $result.text('Event: load-success.bs.table');
                })
                .on('load-error.bs.table', function (e, status) {
                    $result.text('Event: load-error.bs.table');
                })
                .on('column-switch.bs.table', function (e, field, checked) {
                    $result.text('Event: column-switch.bs.table');
                })
                .on('page-change.bs.table', function (e, number, size) {
                    $result.text('Event: page-change.bs.table');
                })
                .on('search.bs.table', function (e, text) {
                    $result.text('Event: search.bs.table');
                });
        });
    </script>

</body>
</html>

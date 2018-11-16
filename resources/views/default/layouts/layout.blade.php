<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Jumbotron Template for Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="jumbotron.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>

@section('navbar')
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Laravel Project:</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo route('home'); ?>"> Home </a></li>
                <li><a href="<?php echo route('about'); ?>"> About </a></li>
                <li><a href='<?php echo route('articles'); ?>'> Articles </a></li>
                <li><a href='<?php echo route('article', ['id' => 10]); ?>'> Article </a></li>
            </ul>
        </div>
    </div>
</nav>
@show

@section('header')
<div class="jumbotron">
    <div class="container">
        <h1><?php echo $title; ?></h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>
@show

<div class="container">
    <div class="row">
        <div class="col-md-4">
            @section('sidebar')
            <div class="sidebar-module">
            <h2>Archives</h2>
                <p>
                    <a href="#">March 2014</a> <br>
                    <a href="#">February 2014</a> <br>
                    <a href="#">January 2014</a> <br>
                    <a href="#">December 2013</a> <br>
                    <a href="#">November 2013</a> <br>
                    <a href="#">October 2013</a> <br>
                    <a href="#">September 2013</a> <br>
                    <a href="#">August 2013</a> <br>
                    <a href="#">July 2013</a> <br>
                    <a href="#">June 2013</a> <br>
                    <a href="#">May 2013</a> <br>
                    <a href="#">April 2013</a> <br>
                </p>
            </div>
            @show
        </div>

        @yield('content')

    </div>

    <hr>

    <footer>
        <p>&copy; 2018 Company, Inc.</p>
    </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>


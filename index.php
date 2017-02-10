<?php require('quotes.php') ?>
<!doctype html>
<html lang="en-us">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kenneth Cordero</title>
<link rel="shortcut icon" type="'image/x-icon" href="/images/favicon.ico">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/styles/default.css">
<div class="container">
    <h1 class="center">Kenneth Cordero</h1>
    <hr>
    <div class="col-md-6 col-md-offset-3">
        <h4 class="center">About Me</h4>
        <div>Welcome to my site. I'm Ken and I live in Chicagoland with my wife and two kids.
            I'm a software developer these days, but my first love was the classical guitar.
            I'm currently pursuing my Master's degree in Information Management Systems.</div>

    </div>
    <div class="center">
        <img src="/images/me.jpg" alt="Me">
    </div>
    <hr>
    <div class="center">
        <h4>Random Quote</h4>
        <div class="italic"><?= $random_quote['quote'] ?></div>
        <div>- <?= $random_quote['attribution'] ?></div>
    </div>
</div>
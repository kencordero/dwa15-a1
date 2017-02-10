<?php require('quotes.php') ?>
<!doctype html>
<html lang="en-us">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kenneth Cordero</title>
<link rel="shortcut icon" type="'image/x-icon" href="/images/favicon.ico">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/styles/default.css">
<div class="container">
    <h1>Kenneth Cordero</h1>
    <hr>
    <div id="about-me">
        <h4>About Me</h4>
        <p>Welcome to my site. I'm Ken and I live in Chicagoland with my wife and two kids.</p>
        <p>I enjoy playing classical guitar in my ever-diminishing spare time.</p>
    </div>
    <div id="image">
        <img src="/images/me.jpg" alt="Me">
    </div>
    <hr>
    <div class="center">
        <h4>Random Quote</h4>
        <div class="italic"><?= $random_quote['quote'] ?></div>
        <div>- <?= $random_quote['attribution'] ?></div>
    </div>
</div>
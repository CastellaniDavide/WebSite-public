<?php
    # make sure https protocol is using
    include 'https.php';
    # head
    echo "﻿<!DOCTYPE html><html lang='it'><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'><meta name='viewport' content='width=device-width, initial-scale=1.0'><title>" . substr($_GET['location'], 1, -1) . "</title><link rel='shortcut icon' href='./favicon.ico' type='image/x-icon'><link rel='stylesheet' href='./css_js/bootstrap.min.css'><link rel='stylesheet' href='./css_js/site.css'><link rel='stylesheet' href='./site.css'><link rel='stylesheet' href='./style.css'><link href='./css_js/css' rel='stylesheet'><link href='./css_js/css(1)' rel='stylesheet'><script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script></head>";
    # navbar
    include 'navbar.php';
    # title
    echo "</header><div class='container'><main role='main' class='pb-3'><br /><br /><br /><br /><div class='container'><div class='alert alert-info alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Info!</strong> This is a beta if you have any problem contact me: <a href='mailto:help@castellanidavide.it' title='Help'>help@castellanidavide.it</a></div></div><div class='text-center'><h1 style='font-family: &#039;Yellowtail&#039;, cursive;&#039; class='display-4'>" . substr($_GET['location'], 1, -1) . "</h1></div><br>";
?>
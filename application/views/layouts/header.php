<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>List of Users</title>

    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>css/app.css">

    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>css/bootstrap.min.css">

    <script type='text/javascript' src="<?php echo base_url();?>js/app.js"></script>

</head>

<body>

<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            User
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
<!--                @guest-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="/login">{{ __('Login') }}</a>-->
<!--                </li>-->
<!--                {{--<li class="nav-item">--}}-->
<!--                    {{--<a class="nav-link" href="/register">{{ __('Register') }}</a>--}}-->
<!--                    {{--</li>--}}-->
<!--                @else-->
<!---->
<!--                @if(Auth::user()->isAdmin())-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="/admin/calendar">Calendar</a>-->
<!--                </li>-->
<!--                @endif-->

<!--                <li class="nav-item dropdown">-->
<!--                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"-->
<!--                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>-->
<!--                        Test User<span-->
<!--                            class="caret"></span>-->
<!--                    </a>-->
<!---->
<!--                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">-->
<!---->
<!--                        <a class="dropdown-item" href="/profile">-->
<!--                            Edit Profile-->
<!--                        </a>-->
<!---->
<!--                        <a class="dropdown-item" href="/changepassword">-->
<!--                            Change Password-->
<!--                        </a>-->
<!---->
<!--                        <hr class="m-0">-->
<!---->
<!--                        <a class="dropdown-item" href="/logout">-->
<!--                            Logout-->
<!--                        </a>-->
<!---->
<!--                    </div>-->
<!--                </li>-->

            </ul>
        </div>
    </div>

</nav>
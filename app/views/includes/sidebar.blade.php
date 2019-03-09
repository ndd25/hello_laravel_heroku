<?php
/**
 * Created by PhpStorm.
 * User: Dilip
 * Date: 3/9/2019
 * Time: 10:28 AM
 */
<!-- sidebar nav -->
    <nav id="sidebar-nav">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="#">Fly to the Moon</a></li>
            <li><a href="#">Dig to China</a></li>
            <li><a href="#">Swim Across the Sea</a></li>
        </ul>
    </nav>


<!doctype html>
<html>
<head>
@include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        <!-- sidebar content -->
        <div id="sidebar" class="col-md-4">
            @include('includes.sidebar')
        </div>

        <!-- main content -->
        <div id="content" class="col-md-8">
            @yield('content')
        </div>

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
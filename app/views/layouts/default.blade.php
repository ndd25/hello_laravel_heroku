<?php
/**
 * Created by PhpStorm.
 * User: Dilip
 * Date: 3/9/2019
 * Time: 10:26 AM
 */
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

        @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
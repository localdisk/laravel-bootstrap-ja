<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8" />
        <title>
            @section('title')
            Laravel 4 - Bootstrap App
            @show
        </title>
        <meta name="keywords" content="your, awesome, keywords, here" />
        <meta name="author" content="localdisk" />
        <meta name="description" content="Laravel 4 Bootstrap App Japanese Edition with Twitter Bootstrap and Generators, IDE Helper" />

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS
        ================================================== -->
        <?= HTML::style('css/bootstrap.css') ?>

        <style>
            @section('styles')
            body {
                min-height: 2000px;
                padding-top: 70px;
            }
            @show
        </style>

        <!-- Favicons
        ================================================== -->
    </head>

    <body>
        <!-- Navbar -->
        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li <?= (Request::is('/') ? 'class="active"' : '') ?>><a href="<?= URL::to('') ?>">Home</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::check())
                        <li>Logged in as <?= Auth::user()->username ?></li>
                        <li></li>
                        <li  <?= (Request::is('account') ? 'class="active"' : '') ?>><a href="<?= URL::to('user') ?>">Account</a></li>
                        <li><a href="<?= URL::to('user/logout') ?>">Logout</a></li>
                        @else
                        <li <?= (Request::is('user/login') ? 'class="active"' : '') ?>><a href="<?= URL::to('user/login') ?>">Login</a></li>
                        <li <?= (Request::is('user/register') ? 'class="active"' : '') ?>><a href="<?= URL::to('user/register') ?>">Sign Up</a></li>
                        @endif
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        <!-- ./ navbar -->
        <!-- Container -->
        <div class="container">
            <!-- notifications -->
            @include('notifications')
            <!-- ./ notifications -->

            <!-- Content -->
            @yield('content')
            <!-- ./ content -->
        </div>
        <!-- ./ container -->

        <!-- Javascripts
        ================================================== -->
        <?= HTML::script('js/jquery-1.10.2.min.js') ?>
        <?= HTML::script('js/bootstrap.js') ?>
    </body>
</html>
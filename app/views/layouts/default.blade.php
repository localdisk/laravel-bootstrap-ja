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
        <?= HTML::style('css/bootstrap-responsive.css') ?>

		<style>
		@section('styles')
			body {
				padding-top: 60px;
			}
		@show
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
	</head>

	<body>
		<!-- Navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>

					<div class="nav-collapse collapse">
						<ul class="nav">
							<li <?= (Request::is('/') ? 'class="active"' : '') ?>><a href="<?= URL::to('') ?>">Home</a></li>
						</ul>

			                        <ul class="nav pull-right">
			                            @if (Auth::check())
			                            <li class="navbar-text">Logged in as <?= Auth::user()->username ?></li>
			                            <li class="divider-vertical"></li>
			                            <li  <?= (Request::is('account') ? 'class="active"' : '') ?>><a href="<?= URL::to('user') ?>">Account</a></li>
			                            <li><a href="<?= URL::to('user/logout') ?>">Logout</a></li>
			                            @else
			                            <li <?= (Request::is('user/login') ? 'class="active"' : '') ?>><a href="<?= URL::to('user/login') ?>">Login</a></li>
			                            <li <?= (Request::is('user/register') ? 'class="active"' : '') ?>><a href="<?= URL::to('user/register') ?>">Sign Up</a></li>
			                            @endif
			                        </ul>
					</div>
					<!-- ./ nav-collapse -->
				</div>
			</div>
		</div>
		<!-- ./ navbar -->

		<!-- Container -->
		<div class="container">
			<!-- Notifications -->
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
        <?= HTML::script('js/bootstrap.min.js') ?>
	</body>
</html>
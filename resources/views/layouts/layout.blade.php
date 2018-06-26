<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<meta name="token" content="{{ csrf_token() }}" />
	<meta name="url" content="{{ url('') }}" />
	<title>AndroidAccessibility : {{ $title or "Default"}}</title>
	<!-- Projeto -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- Default -->
	<link href="{{ asset('css/default.css') }}" rel="stylesheet">
	<!-- Font Icon Demo Fontello -->
	<link rel="stylesheet" href="{{ asset('icons/animation.css') }}">
	<link rel="stylesheet" href="{{ asset('icons/fontello-embedded.css') }}">
	<link rel="stylesheet" href="{{ asset('icons/fontello-codes.css') }}">
	<link rel="stylesheet" href="{{ asset('icons/fontello.eot') }}">
	<link rel="stylesheet" href="{{ asset('icons/fontello.ttf') }}">
	<link rel="stylesheet" href="{{ asset('icons/fontello.woff') }}">
	<!-- Link a serem adicionados -->
	@stack('link-add')
	
	<!-- Font Nunito Sans Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
	<!-- JQuery -->
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<!-- Default -->
	<script type="text/javascript" src="{{ asset('js/default.js') }}"></script>
	<!-- Script a serem adicionados -->
	@stack('script-add-head')
</head>
<body>

<style>
	
	/* Pattern */

	*{
		margin:  0;
		padding: 0;
		font-family: 'Nunito', sans-serif;
	}

	body{
		background-color: #f7f7f7;
	}

	.box{
		margin: 0;
		padding: 0;
	}

	.box-double{
		margin: 0;
		padding: 0;
		padding-left: 10px;
	}

	.form-button{
		padding: 10px 15px;
		border-radius: 3px;
		border: solid 1px #ebebeb;
	}

	.btn-margin-left{
		margin-left: 10px;
	}

	.btn-margin-right{
		margin-right: 10px;
	}

	.bg-danger{
		background-color: #ec5461;
		border: solid 1px #db4551;
		color: #fff;
		transition: 0.2s all;
	}

	.bg-danger:hover{
		background-color: #db4551;
	}

	.bg-info{
		background-color: #5d9ceb;
		border: solid 1px #4b8ada;
		color: #fff;
		transition: 0.2s all;
	}

	.bg-info:hover{
		background-color: #4b8ada;
	}

	.bg-success{
		background-color: #48cfae;
		border: solid 1px #35bb9a;
		color: #fff;
		transition: 0.2s all;
	}

	.bg-success:hover{
		background-color: #35bb9a;
	}

	.disabled{
		display: none !important;
	}

	/*--------------------------------------------------------------------*/

	.btn-import{
		width: 100%;
		padding: 5px;
		margin-top: 26px;
	}

	table{
		width: 100% !important;
		background-color: #fff;
		border: solid 1px #ebebeb;
		margin: 0 !important;
		border-radius: 3px 3px 0 0;
	}

	.table-head, .table-body{
		background-color: #fff;
		border: solid 1px #ebebeb; 
	}

	.table thead tr th{
		border: none;
	}

	.table tr .buttons button{
		width: 30px;
		display: inline-block;
		background-color: transparent;
		border: none;
		-webkit-transition: all .200s;
		   -moz-transition: all .200s;
		    -ms-transition: all .200s;
		     -o-transition: all .200s;
		        transition: all .200s;
	}

	.table tr .buttons button:hover{
		-webkit-transform: scale(1.2);
		   -moz-transform: scale(1.2);
		    -ms-transform: scale(1.2);
		     -o-transform: scale(1.2);
		        transform: scale(1.2);
	}

	.table tr .buttons button:focus{
		box-shadow: none;
		outline: 0;
	}

	.table-footer{
		width: 100%;
		background-color: #fff;
		margin-bottom: 20px;
		padding: 0 20px;
		box-sizing: border-box;
		border-radius: 0 0 3px 3px;
		border: solid 1px #ebebeb;
		border-width: 0 1px 1px 1px;
		display: flex;
		align-items: center;
	}

	/*--------------------------------------------------------------------*/

	/* HEADER */

	header{
		width: 20%;
		background-color: #fff;
		border-right: solid 1px #ebebeb; 
		float: left;
	}

	header .header_logo{
		width: 100%;
		background-color: #0f62ce;
		padding: 15px;
	}

	header .header_logo h1{
		color: #fff;
		font-size: 20px;
	}

	header .header_logo img{
		display: block;
		left: 0;
		right: 0;
		margin: auto;
	}

	header #menu{
		width: 100%;
	}

	header #menu .menu_info{
		width: 100%;
		display: block;
		background-color: #f6f6f6;
		padding: 10px;
	}

	header #menu li{
		width: 100%;
		display: block;
		padding: 10px;
		list-style-type: none;
		color: #313131;
		border-bottom: solid 1px #ebebeb; 
		cursor: pointer;
		transition: .2s all; 
	}

	header #menu li:hover{
		background-color: #0f62ce;
	}

	header #menu li a{
		text-decoration: none;
		color: #313131;
		transition: .2s all; 
	}

	header #menu li:hover a{
		color: #fff;
	}

	/* MAIN */

	main{
		width: 80%;
		height: auto;
		padding: 10px 20px;
		box-sizing: border-box;
		float: left;
	}

	main .title{
		margin: 0;
		padding: 0;
		font-weight: bold;
		color: #5a5a5a;
	}

	main .description{
		font-size: 17px;
	}

	/* FORM */

	main form{
		width: 100%;
		background-color: #fff;
		padding: 20px;
		box-sizing: border-box;
		border: solid 1px #ebebeb;
		margin-bottom: 30px;
	}

	main form label{
		width: 100%;
		font-weight: lighter;
		margin-bottom: 20px;
	}

	main form label span{
		display: block;
		margin-bottom: 5px;
	}

	main form label .form-input{
		width: 100%;
		display: block;
		padding: 5px;
		border-radius: 3px;
		background-color: #fafafa;
		border: solid 1px #ebebeb;
		resize: vertical;
	}

	.select2-container--default .select2-selection--single .select2-selection__rendered{
		width: 100%;
		display: block;
		padding: 2px 10px;
		margin:  0 !important;
		border-radius: 3px;
		background-color: #fafafa;
		border: solid 1px #ebebeb;
	}

	.select2-container--default .select2-selection--multiple{
		width: 100%;
		display: block;
		padding: 2px 5px;
		margin:  0 !important;
		border-radius: 3px;
		background-color: #fafafa;
		border: solid 1px #ebebeb;
	}

	.select2-container--default .select2-selection--multiple .select2-selection__choice{
		background-color: #fff;
		float: left;
		border: solid 1px #ccc;
		border-radius: 3px;
		margin-top: 3px;
		padding: 5px;
		margin-right: 5px;
	}

	.select2-container--default .select2-selection--multiple .select2-selection__rendered li{
		padding: 5px 5px 0 5px;
	}

	.select2-container--open .select2-dropdown--below{
		background-color: #fafafa;
		border: solid 1px #ebebeb;
		border-width: 0 1px 1px 1px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.2);
	}

	.select2-container--default .select2-search--dropdown .select2-search__field{
		border: solid 1px #ebebeb !important;
	}

	.select2-container--default .select2-results__option--highlighted[aria-selected]{
		background-color: #ec5461;
	}

	main form label textarea{
		height: 100px;
	}

	.pagination li a{
		color:  #5a5a5a !important;
	}

	/*.pagination .active{
		background: linear-gradient(to bottom right, #fa5242, #f94736) !important; 
	}*/

	.pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover{
		background: linear-gradient(to bottom right, #fa5242, #f94736) !important; 
		border: solid 1px #fa5242;
	}

	#logout-form{
		display: none;
	}

</style>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>

<span id="url_pattern" data-value="{{ url('') }}"></span>

<header>
	<div class="header_logo">
		<img src="{{ asset('img/logo.png') }}" alt="ANDROIDACCESSIBILITY" title="ANDROIDACCESSIBILITY" width="200">
	</div>	
	<ul id="menu">
		<li><a href="{{ url('home') }}">Home</a></li>
		<span class="menu_info">Visualizar</span>
		<li><a href="{{ url('map') }}">Map</a></li>
		<li><a href="{{ url('seeks') }}">Solicitações</a></li>
		<li><a href="{{ url('users') }}">Usuários</a></li>
		<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a></li>
	</ul>
</header>

<main>
	<div id="alert"></div>
	<h1 class="title">{{ $title or "Default" }}</h1>
	<p class="description">{{ $description or "Default" }}</p>
	@yield('content')
</main>

@stack('script-add')
</body>
</html>
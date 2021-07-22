@include('script')
@include('styles')
<html>
	<head>
 		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<meta name="csrf-token" content="{{ csrf_token() }}">
 	
 		<title>@yield('title')</title>
 		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
 		<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
 		
 		@stack('head')
 		<i class="fas fa-alicorn"></i>
	</head>
	<body>
 		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		
		<a class="navbar-brand" href="/praticien">Compte-rendu</a>
 		<a class="navbar-brand" href="/users">Profil</a>
 		<a class="navbar-brand" href="/rapportvisite">Rapport de Visite</a>
 		<a class="navbar-brand" href="/">Se connecter</a>
 		</nav>
 		@yield('content')
	</body>
</html>
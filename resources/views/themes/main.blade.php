<html lang="{{ app()->getLocale() }}">
    <head>
         <title>Confiteria Marfen</title>
		 <meta charset="utf-8">
		 <link rel="canonical" href="https://confiteriamarfen.es/" itemprop="url">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="referrer" content="always">
		<link rel="apple-touch-icon" sizes="180x180" href="/images/logo-marfen.svg">
		<link rel="mask-icon" href="/images/logo-marfen.svg" color="#f4645f">
		<meta name="theme-color" content="#ffffff">
		<meta name="description" content="Laravel News is the official blog of Laravel. Every day bringing you the latest news, tutorials, and packages for the framework." />
		<meta property="og:locale" content="es_ES" />
		<meta property="og:title" content="Confiteria Marfen" />
		<meta property="og:description" content="Los Mejores pasteles de Alicante" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet" type="text/css">
		<link  rel="stylesheet" href="{{asset('css/ionicons.min.css')}}" type="text/css">
		<link  rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
		<link  rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
		
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/popper.min.js')}}"></script>
		<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
     </head>
    <body>
		
		
       @yield('content')
	   
	
     
	  
	</body>
</html>

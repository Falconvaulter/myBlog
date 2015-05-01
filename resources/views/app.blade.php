<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recipes</title>
    
    <link href='http://fonts.googleapis.com/css?family=Bilbo+Swash+Caps|Parisienne' rel='stylesheet' type='text/css'>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body>
	@include('partials.nav')
    
    <div class="container">
       @include('partials.flash')
        
	   @yield('content')
    </div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
</body>
</html>

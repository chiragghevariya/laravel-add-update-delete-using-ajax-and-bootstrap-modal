<html>

<head>
<title>@yield('title')</title>

<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" type="text/css" href="{{asset('stylefile/style.css')}}">
</head>

<body>

<script rel="javascript" type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
 
<!-- Latest compiled JavaScript -->
<script rel="javascript" type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

@yield('content')

</body>
</html>
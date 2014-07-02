<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <title>@yield('title')</title>
        @yield('meta')
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="icons/ionicons.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,100,700,500' rel='stylesheet' type='text/css'>
        @yeild('scripts.top')
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        @include('partials.navigation')
        @yield('content')
        @include('partials.footer')
        @yield('scripts.bottom')
    </body>
</html>

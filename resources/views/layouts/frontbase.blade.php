<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="@yield("description")">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="@yield("keywords")">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>@yield("title")</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets')}}/img/core-img/favicon.ico">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets')}}/style.css">
    
    @yield("head")
</head>

<body>
@include("home.header")

@yield('content')

@include("home.footer")
</body>
</html>

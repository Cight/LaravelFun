<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="https://developer.avego.com/mobilesite/bootstrap-3.0.0/examples/jumbotron-narrow/jumbotron-narrow.css"
          rel="stylesheet">
</head>

<body>
<div class="container">
    @include('layouts.menu')
    <div class="jumbotron">
        <h1 class="display-3">@yield('heading')</h1>
        @yield('body')
        @yield('test')
    </div>
    @include('layouts.footer')
</div>

</body>
</html>
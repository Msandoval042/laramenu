<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-right"> AppleBee's Menu</h1>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <button type="button" class="btn btn-warning-outline">Delete</button>
            @yield('content')
        </div>
    </div>
</div>

</body>
</html>
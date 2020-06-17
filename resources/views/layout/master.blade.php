<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>備忘錄-DEMO</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/master/master.css')}}">
    @yield('css-part')
</head>
<body>
<div class="pt-3"></div>
<header class="container bg-winnie">
    <div class="row">
        <div class="col-md-7">
            @yield('title')
        </div>
        <div class="col-md-5 d-flex justify-content-end align-items-end pb-2">
            @yield('btn-group')
        </div>
    </div>
</header>
<section class="container bg-winnie">
    @yield('content')
</section>
<footer class="container bg-winnie text-right">
    <span class="text-small-tag">this is demo to rent house training work. This Web is design form yingLu Chen.</span>
</footer>
</body>
</html>
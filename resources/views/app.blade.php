<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Index')</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.14.1/ckeditor.js" integrity="sha512-P4rrEImABBYtBFdmrFPqF8rjh8iiRiupfQ4KLrBCL8dAivLiM2nh+1bJQeMb2ZglmIlGZdfTtgGdXH6H/hGVeg==" crossorigin="anonymous"></script>
</head>
<body>
    @include('partials.nav')

    @yield('content')

</body>
</html>

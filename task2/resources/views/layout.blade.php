<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div id="header">
    @section('header')
    <h3 class="text-center">Header</h3>
    <div class="m-3 p-3">
    @show
</div>
<div id="content">
    @yield('content')
</div>
</div>


<div id="footer">
    @section('footer')
    <h3 class="text-center">Footer</h3>
    Copyright 2019
    @show
</div>

</body>
</html>

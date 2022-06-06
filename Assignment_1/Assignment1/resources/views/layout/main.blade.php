<html>
    <head></head>
    <body>
        <div>
            <a href="{{route('root')}}">Product List</a>
            <a href="{{route('addproduct')}}">Add Product</a>
            <br><br>
        </div>
        @yield('content')
    </body>
</html>
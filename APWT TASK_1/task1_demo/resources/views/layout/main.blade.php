<html>
    <head></head>
    <body>
        <div>
            <a href="{{route('root')}}">Home</a>
            <a href="{{route('service')}}">Services</a>
            <a href="{{route('teams')}}">Our Team</a>
            <a href="{{route('contact')}}">Contact</a>
            <a href="{{route('about')}}">About Us</a>
        </div>
        @yield('content')
    </body>
</html>
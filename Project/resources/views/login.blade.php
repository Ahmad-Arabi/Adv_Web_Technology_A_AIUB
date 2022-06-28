@extends('layout.main2')
@section('content')

<h1 align="center">Login</h1>
<br>
<form align="center" action="" method="post">
    
    {{@csrf_field()}}
    
    Email : <input type="email" value="{{old('email')}}" name="email"> </br>
    @error('email')
        <span style="color:red">{{$message}}</span><br>
    @enderror
    
    <br>
    Password : <input type="password" name="password"></br>
    @error('password')
        <span style="color:red">{{$message}}</span><br>
    @enderror
    
    <br>
    <input type="submit" value="Login">
</form>
@endsection
@extends('layout.main2')
@section('content')

<h1 align="center">Registration</h1>
<br>
<form align="center" action="" method="post">
    
    {{@csrf_field()}}
    
    Name : <input type="text" value="{{old('name')}}" name="name"> </br>
    @error('name')
        <span style="color:red">{{$message}}</span><br>
    @enderror
    
    <br>
    Email : <input type="email" name="email" value="{{old('email')}}"> </br>
    @error('email')
        <span style="color:red">{{$message}}</span><br>
    @enderror
    
    <br>
    Password: <input type="password" name="password" value="{{old('password')}}"></br>
    @error('password')
        <span style="color:red">{{$message}}</span><br>
    @enderror

    <br>
    Type: <input type="text" name="type" value="{{old('type')}}"></br>
    @error('type')
        <span style="color:red">{{$message}}</span><br>
    @enderror
    
    <br>
    <input type="submit" value="Register">
</form>
@endsection
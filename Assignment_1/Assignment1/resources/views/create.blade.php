@extends('layout.main')
@section('content')

<h1 align="center">Add Product</h1>
<br>
<form align="center" action="" method="post">
    
    {{@csrf_field()}}
    
    Name : <input type="text" value="{{old('name')}}" name="name"> </br>
    @error('name')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <br>
    Id : <input type="text" name="id" value="{{old('id')}}"> </br>
    @error('id')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <br>
    Price: <input type="number" name="price" value="{{old('price')}}"></br>
    @error('price')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <br>
    <input type="submit" value="Add">
</form>
@endsection
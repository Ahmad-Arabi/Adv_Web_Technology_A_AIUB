@extends('layout.main')
@section('content')

<h1 align="center">Product Details</h1>
    <br><br>
    <div style="font-size: 30px" align="center" border="5">
        ID: {{$p->id}}
        <br>
        Name: {{$p->name}}
        <br>
        Price: {{$p->price}}
    </div>
@endsection
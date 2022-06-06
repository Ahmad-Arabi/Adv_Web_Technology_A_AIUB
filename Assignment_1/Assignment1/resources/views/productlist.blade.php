@extends('layout.main')
@section('content')

<h1 align="center">Product List</h1>
    <table width="25%" align="center" border="5">
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach($products as $p)
            <tr align="center">
                <td><a href="{{route('productdetails',['id'=>$p->id])}}">{{$p->id}}</a></td>
                <td>{{$p->name}}</td>
            </tr>
        @endforeach
    </table>
@endsection
@extends('layout.main')
@section('content')

<h1 align="center">Our Team</h1>
   
    <table width="50%" align="center" border="5">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
        </tr>
        @foreach($employees as $e)
            <tr>
                <td>{{$e->id}}</td>
                <td>{{$e->name}}</td>
                <td>{{$e->dept}}</td>
            </tr>
        @endforeach
    </table>
@endsection
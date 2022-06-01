@extends('layout.main')
@section('content')

<h1 align="center">Services</h1>
   
    <table width="50%" align="center" border="5">
        <tr align="center">
            <th>No.</th>
            <th>Service</th>
            <th>Cost</th>
            <th>Duration</th>
        </tr>
        @foreach($services as $s)
            <tr align="center">
                <td>{{$s->no}}</td>
                <td>{{$s->serv}}</td>
                <td>{{$s->cost}}</td>
                <td>{{$s->duration}}</td>
            </tr>
        @endforeach
    </table>
@endsection
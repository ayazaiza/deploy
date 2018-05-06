@extends('layouts.lay')

@section('layout')

<h1>{{$title}}</h1>

@if(count($fields) > 0)
 <ul>
    @foreach($fields as $field)
    <li>{{$field}}</li>
    @endforeach

    </ul>
@endif



@endsection
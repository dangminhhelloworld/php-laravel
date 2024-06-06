@extends('users.user')

@section('title', 'Test cha con')
@section('content')
    <p>Đây là thẻ con </p>
@foreach($data as $item)
<h1>{{$item}}</h1>

@include('users.user')

@endforeach
@endsection



@extends('app')

@section('title', 'Services')

@section('content')

<h1>Tạo Học viên mới</h1>

<form action="/codegymer" method="post">
    @include('codegymer.form')

    <button>Add CodeGymer</button>
</form>

@endsection

@extends('app')

@section('title', 'Services')

@section('content')

<h1>Tạo Học viên mới</h1>

<form action="/codegymer/{{$codegymer->id}}" method="post">
    @include('codegymer.form')
    @method("PATCH")
    <button>Update CodeGymer</button>
</form>

@endsection

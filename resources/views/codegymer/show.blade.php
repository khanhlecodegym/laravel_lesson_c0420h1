@extends('app')

@section('title', 'Services')

@section('content')

<h1>Chi Tiết Thông Tin Học Viên</h1>

<h2>Tên : {{ $codegymer->name }}</h2>
<p>Email: {{ $codegymer->email }}</p>

<button><a href="/codegymer/{{ $codegymer->id }}/edit">Edit</a></button>

<div>
    <form action="/codegymer/{{ $codegymer->id }}" method="post">
        @method("DELETE")
        @csrf

        <button>Delete</button>
    </form>
</div>

@endsection

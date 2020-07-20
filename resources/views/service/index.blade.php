@extends('app')

@section('title', 'Services')

@section('content')

<h1>Create Service</h1>

<form action="/services" method="post">
    <label for="title">Title</label>
    <input type="text" name="title" autocomplete="off">
    @error('title')
        <p style="color: red">{{ $message }}</p>
    @enderror
    @csrf

    <button>Add Service</button>
</form>

<ul>
    @forelse ($services as $item)
    <li>{{ $item->title }}</li>
    @empty
        <h3>C4 không có gì ngoài tình củm</h3>
    @endforelse

</ul>

@endsection

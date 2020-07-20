@extends('app')

@section('title', 'Services')

@section('content')

<h1>Danh Sách Học Viên CodeGym</h1>

<a href="/codegymer/create">Add</a>

<ul>
    @forelse ($codegymers as $item)
<li>{{ $item->name }} <span><a href="/codegymer/{{$item->id}}">Detail</a></span></li>
    @empty
        <h3>CodeGym hiện tại chưa có học viên</h3>
    @endforelse

</ul>

@endsection

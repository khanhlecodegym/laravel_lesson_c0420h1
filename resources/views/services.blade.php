@extends('app')

@section('title', 'Services')


@section('content')
    <h3>Các  dịch vụ của C4</h3>
    <ul>
        @forelse ($services as $item)
        <li>{{ $item }}</li>
        @empty
            <h3>C4 không có gì ngoài tình củm</h3>
        @endforelse

    </ul>
@endsection

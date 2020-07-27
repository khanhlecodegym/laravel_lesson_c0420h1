@extends('app')

@section('title', 'Services')

@section('content')

<h1>Danh Sách Học Viên CodeGym</h1>

<a href="/codegymer/create" class="btn btn-secondary">Add</a>





  <ul class="list-group mt-2">
    @forelse ($codegymers as $item)
    <li class="list-group-item bg-info">{{ $item->name }}
    <span class="pl-3">Thuộc Lớp: <a href="/codegymer/{{$item->id}}" class="btn btn-primary">{{ $item->group->name }}</a></span>
    <span class="pl-3"><a href="/codegymer/{{$item->id}}" class="btn btn-primary">Detail</a></span>
</li>
    @empty
        <h3>CodeGym hiện tại chưa có học viên</h3>
    @endforelse
    <p class="mt-4">{{ $codegymers->links() }}</p>

</ul>

@endsection

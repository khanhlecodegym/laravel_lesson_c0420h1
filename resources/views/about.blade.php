@extends('app')

@section('title', 'About')

@section('content')
<p>Lớp C4 tu luyện 300 năm mới sinh ra Lân được 1</p>
<textarea name="" id="content1" cols="30" rows="10">

</textarea>

<script>
    CKEDITOR.replace( 'content1');
</script>
@endsection


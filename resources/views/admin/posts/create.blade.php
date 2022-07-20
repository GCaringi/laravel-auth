@extends('layouts.app');

@section('content')
    <div class="w-[1200px] m-auto">
        <h1>Create Post</h1>
        <form action="{{route('admin.posts.store')}}" method="POST" class="flex flex-col justify-start items-start">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
            <label for="published">Pubblicato</label>
            <input type="checkbox" name="published" id="published">
            <button type="submit">Crea Post</button>
        </form>
    </div>
@endsection

@extends('layouts.app');

@section('content')
    <div class="max-w-[1200px] m-auto grid grid-cols-6 ">
        @foreach ($posts as $post)
            <div class="h-[100px] flex items-center">
                {{$post->title}}
            </div>
        @endforeach
    </div>
    <a href="{{route('admin.posts.create')}}">Aggiungi</a>
@endsection

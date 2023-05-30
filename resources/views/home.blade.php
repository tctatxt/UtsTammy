@extends('layout.master')
@section('title', 'home')
@section('content')
    <div class="mx-3 my-3">
        <a href="/detail/{{ $higlight->id }}" class="flex flex-row border-2 border-black mt-6">
            <img class="w-1/4" src="{{ $higlight->detail->image }}" alt="">
            <div class="flex flex-col mx-3">
                <p class="text-sm my-2 border-b-2 border-black">It Really Counts</p>
                <h1 class="text-4xl">{{ $higlight->title }}</h1>
                <p>{{ $higlight->description }}</p>
            </div>
        </a>
        <div class="border-2 border-black mt-3">
            <h1 class="text-2xl m-2 border-b-2 border-black">Latest Book Review</h1>
            <div class="flex flex-row grid grid-cols-4 gap-3">
                @foreach ($latest as $post)
                    <a href="/detail/{{ $post->id }}" class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{ $post->image }}" alt="">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $post->Post->title }}</div>
                            <p>{{ $post->Post->description }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <h1 class="text-2xl m-2">Book Series Revies</h1>
        <div class="flex flex-row grid grid-cols-3">
            @foreach ($posts as $post)
                <div class="max-w-sm rounded overflow-hidden shadow-lg mb-3">
                    <img class="w-full" src="{{ $post->detail->image }}" alt="">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $post->title }}</div>
                    </div>
                    <a class="mx-2 border-2 p-3 border-black" href="/detail/{{ $post->id }}">Read Post</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

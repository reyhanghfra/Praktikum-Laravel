<!-- Menginduk ke file layouts/app.blade.php -->
@extends('layouts.app')

<!-- Mengisi placeholder @yield('title') -->
@section('title', 'Daftar Artikel')

<!-- Mengisi placeholder @yield('content') -->
@section('content')
    <h1>Daftar Postingan</h1>
    <hr>

    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
        @if ($post->published)
            <span style="color: green; font-weight: bold;">[Published]</span>
        @else
            <span style="color: red; font-weight: bold;">[Draft]</span>
        @endif
    @endforeach
@endsection
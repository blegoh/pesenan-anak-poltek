@extends('layouts.master')

@section('content')
    <div class="blog-post">
        <div class="container">
            <h3 class="blog-post-title">
                {{$page->title}}
            </h3>

            <div class="blog-post-content">
                {!! $page->content !!}
            </div>
        </div>
    </div>
@endsection

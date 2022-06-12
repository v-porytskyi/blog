@extends('layouts.blog')

@section('og-meta')
    <meta property="og:type" content="article"/>
@endsection

@section('aside')
    @include('blog.components.articles.aside-menu')
@endsection

@section('content')
    @include('blog.components.articles.post-preview')

    @include('blog.components.common.paginator')
@endsection

@section('bottom-page')
    @include('blog.components.home.bottom-page')
@endsection

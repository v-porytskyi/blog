<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta property="og:title" content="{{ env('APP_NAME') }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    @yield('og-meta')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}"/>
</head>
<body>
<div id="wrapper">
    @include('blog.components.common.header')
    <section id="page">
        <aside id="sidebar">
            @yield('aside')
        </aside>
        <main id="content">
            @yield('content')
            <br class="clearfix"/>
        </main>
        <br class="clearfix"/>
    </section>
    @yield('bottom-page')
</div>
@include('blog.components.common.footer')
</body>
</html>

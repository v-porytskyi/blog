@extends('layouts.blog')

@section('og-meta')
    <meta property="og:type" content="article" />
@endsection

@section('aside')
    @include('blog.components.common.aside-menu')
@endsection

@section('content')
<div class="box">
    <h2>Welcome to Accumen</h2>
    <img class="alignleft" src="images/pic01.jpg" width="200" height="180" alt=""/>
    <p>
        This is <strong>Accumen</strong>, a free, fully standards-compliant CSS template by <a
            href="http://templated.co" rel="nofollow">TEMPLATED</a>. The images used in this template are
        from <a href="http://fotogrph.com/">Fotogrph</a>. This free template is released under the <a
            href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty
        much free to do whatever you want with it (even use it commercially) provided you give us credit for
        it.. Have fun :)
    </p>
</div>
<div class="box">
    <h3>Nullam curae integer</h3>
    <img class="post-image" src="https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/05/al-pastor-3507w-1024x683.webp">
    <p>
        Congue quam posuere elit adipiscing varius tellus. Consequat porttitor dolor sed viverra cum congue.
        Varius primis auctor est nisl at mi quam. Ante libero arcu ridiculus blandit placerat. Sociis in
        consequat suscipit felis vivamus odio phasellus. Elementum pellentesque vestibulum gravida morbi
        turpis ante nullam. Pellentesque placerat porta ipsum.
    </p>
</div>
<div class="box">
    <h3>Accumsan euismod gravida pellentesque</h3>
    <p>
        Sociis dictum mauris ultricies suspendisse in quisque. Massa non morbi magna eget. Cubilia aliquet
        duis sapien ac nascetur fringilla ullamcorper. Auctor est odio rhoncus pharetra purus mattis.
        Ultrices vulputate lacus ridiculus imperdiet cursus. Tellus ridiculus morbi fringilla volutpat mi
        magna aliquam.
    </p>
</div>
@endsection

@section('bottom-page')
    @include('blog.components.home.bottom-page')
@endsection

<p>
    <span class="post-counter">
        Likes:
        @if($article->likes >= 1000000000000000000)
            {{ (int)($article->likes / 1000000000000000000) }} квнт.
        @elseif($article->likes >= 1000000000000000)
            {{ (int)($article->likes / 1000000000000000) }} квдр.
        @elseif($article->likes >= 1000000000000)
            {{ (int)($article->likes / 1000000000000) }} трлн.
        @elseif($article->likes >= 1000000000)
            {{ (int)($article->likes / 1000000000) }} млрд.
        @elseif($article->likes >= 1000000)
            {{ (int)($article->likes / 1000000) }} млн.
        @elseif($article->likes === 1000)
            {{ (int)($article->likes / 1000) }} тис.
        @else
            {{ $article->likes }}
        @endif
    </span>

    <span class="post-counter">
        Dislikes:
        @if($article->dislikes >= 1000000000000000000)
            {{ (int)($article->dislikes / 1000000000000000000) }} квнт.
        @elseif($article->dislikes >= 1000000000000000)
            {{ (int)($article->dislikes / 1000000000000000) }} квдр.
        @elseif($article->dislikes >= 1000000000000)
            {{ (int)($article->dislikes / 1000000000000) }} трлн.
        @elseif($article->dislikes >= 1000000000)
            {{ (int)($article->dislikes / 1000000000) }} млрд.
        @elseif($article->dislikes >= 1000000)
            {{ (int)($article->dislikes / 1000000) }} млн.
        @elseif($article->dislikes === 1000)
            {{ (int)($article->dislikes / 1000) }} тис.
        @else
            {{ $article->dislikes }}
        @endif
    </span>

    <span class="post-counter">
        Views:
        @if($article->view >= 1000000000000000000)
            {{ (int)($article->view / 1000000000000000000) }} квнт.
        @elseif($article->view >= 1000000000000000)
            {{ (int)($article->view / 1000000000000000) }} квдр.
        @elseif($article->view >= 1000000000000)
            {{ (int)($article->view / 1000000000000) }} трлн.
        @elseif($article->view >= 1000000000)
            {{ (int)($article->view / 1000000000) }} млрд.
        @elseif($article->view >= 1000000)
            {{ (int)($article->view / 1000000) }} млн.
        @elseif($article->view === 1000)
            {{ (int)($article->view / 1000) }} тис.
        @else
            {{ $article->view }}
        @endif
    </span>
</p>

<div class="paginator">
    <ul>
        @foreach($articles->links()->getData()['elements'] as $links)
            @if (is_array($links))
                @foreach($links as $name => $link)
                    <li><a href="{{ $link }}">{{ $name }}</a></li>
                @endforeach
            @else
                <li>...</li>
            @endif
        @endforeach
    </ul>
</div>

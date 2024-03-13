@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Bouton "Page précédente" --}}
        @if ($paginator->onFirstPage())
        <li><a href="#"><</a></li>
        @else
        <li><a href="{{ $paginator->previousPageUrl() }}"><</a></li>
        @endif

        {{-- Affichage des numéros de page --}}
        @foreach ($elements as $element)
            {{-- "..." de suspension --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Numéro de page actif --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><a href="#">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Bouton "Page suivante" --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}">></a></li>
        @else
        <li><a href="#">></a></li>
        @endif
    </ul>
 
@endif

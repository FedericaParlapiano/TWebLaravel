@if ($paginator->lastPage() != 1)
<div id="pagination">

        @if (!$paginator->onFirstPage())
            <a href="{{ $paginator->url(1) }}">Inizio</a>
        @else
        <a id="precedente">Inizio</a>
        @endif

        <div id="currentPage">
            |
        </div>
        
        @if ($paginator->currentPage() != 1)
            <a href="{{ $paginator->previousPageUrl() }}">Precedente</a>
        @else
            <a id="precedente">Precedente</a>
        @endif
        
        <div id="currentPage">
            |
        </div>
        
        
        <div id="currentPage">
            pagina {{$paginator->currentPage()}} di {{$paginator->lastPage()}}
        </div>
        
        <div id="currentPage">
            |
        </div>
        

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}">Successiva</a>
        @else
                <a id="precedente">Successiva</a>
        @endif
        
        <div id="currentPage">
            |
        </div>

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->url($paginator->lastPage()) }}">Fine</a>
        @else
                <a id="precedente">Fine</a>
        @endif
</div>
@endif
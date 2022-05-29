@isset($annunci)
<div class="contenitore-annunci">
<div class="catalogo-annunci">
    @foreach ($annunci as $annuncio)

    @if($annuncio->disponibilita == 0)
        <div class="annuncio" style="opacity: 0.5;">
    @else
        <div class="annuncio white">
    @endif
    
        @php
        $assente=true;
        @endphp
        @foreach($foto as $singolafoto)
        @if($singolafoto->annuncio!=$annuncio->id)
            @continue
        @endif
        @if($singolafoto->annuncio==$annuncio->id)
            @php
            $assente=false
            @endphp
            <div class="img-class"><a href="{{ route('annuncio', [$annuncio->id]) }}" target="_blank"><img src="{{ asset('images/annunci/' . $singolafoto->immagine) }}" alt="Immagine Casa" class="resize-img"></a></div>
            @break
        @endif
        @endforeach
        
        @if($assente)
        <div class="img-class"><a href=""><img src="images/annunci/noimage.jpg" alt="Casa" class="resize-img"></a></div>
        @endif
        
        
        
        
        <b>
            <h3><a href="{{ route('annuncio', [$annuncio->id]) }}" target="_blank">{{ $annuncio->titolo }} ({{ $annuncio->tipologia }}) </a></h3>
        </b>
        <p>{{ $annuncio->zonaLocazione }}, Canone: {{ $annuncio->canoneAffitto }}€</p>
        <p class="descrizione2">{{ $annuncio->descrizione }}</p>
        
    </div>
    @endforeach
    
</div>
    <br>
    <div id="pagination-filtri" class="pagination">
        @if (!$annunci->onFirstPage())
            <a href="{{ $annunci->url(1) }}">Inizio</a>
        @else
        <a id="precedente">Inizio</a>
        @endif

        <div id="currentPage">
            |
        </div>
        
        @if ($annunci->currentPage() != 1)
            <a href="{{ $annunci->previousPageUrl() }}">Precedente</a>
        @else
            <a id="precedente">Precedente</a>
        @endif
        
        <div id="currentPage">
            |
        </div>
        
        
        <div id="currentPage">
            pagina {{$annunci->currentPage()}} di {{$annunci->lastPage()}}
        </div>
        
        <div id="currentPage">
            |
        </div>
        

        @if ($annunci->hasMorePages())
            <a href="{{ $annunci->nextPageUrl() }}">Successiva</a>
        @else
                <a id="precedente">Successiva</a>
        @endif
        
        <div id="currentPage">
            |
        </div>

        @if ($annunci->hasMorePages())
            <a href="{{ $annunci->url($annunci->lastPage()) }}">Fine</a>
        @else
                <a id="precedente">Fine</a>
        @endif
    </div>
</div>

@endisset()


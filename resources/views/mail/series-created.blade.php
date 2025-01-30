<x-mail::message>

# Uma nova série: {{$nomeSerie}}

A série {{ $nomeSerie }} com {{ $qtdTemporadas }} e {{ $episodiosPorTemporada }} episódios por temporada.

Acesse aqui:

<x-mail::button :url="route('seasons.index', $idSerie)">
    Assistir
</x-mail::button>

</x-mail::message>
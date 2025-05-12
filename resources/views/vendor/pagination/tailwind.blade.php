@if ($paginator->hasPages())
<nav role="navigation" aria-label="Pagination" class="flex items-center justify-center mt-4 space-x-2">
    {{-- Botão "Anterior" --}}
    @if ($paginator->onFirstPage())
    <span class="px-4 py-2 text-gray-100 bg-gray-700 rounded-md cursor-not-allowed">
        ← Anterior
    </span>
    @else
    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">
        ← Anterior
    </a>
    @endif

    {{-- Links das páginas --}}
    @foreach ($elements as $element)
    @if (is_string($element))
    <span class="px-3 py-2 text-gray-500">{{ $element }}</span>
    @endif

    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <span class="px-4 py-2 text-green bg-green-600 rounded-md font-bold shadow-lg">{{ $page }}</span>
    @else
    <a href="{{ $url }}" class="px-4 py-2 text-blue-500 bg-gray-100 rounded-md hover:bg-gray-200">
        {{ $page }}
    </a>
    @endif
    @endforeach
    @endif
    @endforeach

    {{-- Botão "Próximo" --}}
    @if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">
        Próximo →
    </a>
    @else
    <span class="px-4 py-2 text-gray-500 bg-gray-200 rounded-md cursor-not-allowed">
        Próximo →
    </span>
    @endif
</nav>
@endif
<br>
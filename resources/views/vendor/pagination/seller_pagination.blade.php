@if ($paginator->hasPages())
<nav class="seller-find-pr-pa">
    <ul class="pagination mb-0">

        @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">
                <svg stroke="currentColor" fill="#dbdbdb" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
                </svg>

            </a>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">
                <svg stroke="currentColor" fill="#8b8b8b" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
                </svg>

            </a>
        </li>
        @endif


        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="page-item active"><a class="page-link fs14 fv">{{ $page }}</a></li>
        @else
        <li class="page-item"><a class="page-link fv fs14" href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach


        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
                <svg stroke="currentColor" fill="#8b8b8b" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
                </svg>
            </a>
        </li>
        @else
        <li class="page-item disabled" aria-disabled="true">
            <span class="page-link">@lang('pagination.next')</span>
        </li>
        @endif

    </ul>
</nav>
@endif
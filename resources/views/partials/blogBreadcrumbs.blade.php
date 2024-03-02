@unless ($breadcrumbs->isEmpty())
    <div class="d-flex align-items-center">
        @foreach ($breadcrumbs as $breadcrumb)

            @if (!is_null($breadcrumb->url) && !$loop->last)
                <div><a href="{{ $breadcrumb->url }}" class="fs14 text-secondary-2">{{ $breadcrumb->title }}</a></div>
                <div class="px-2 fs14 text-secondary-3">/</div>
            @else

                <div class="fs15 text-dark">{{ $breadcrumb->title }}</div>
            @endif

        @endforeach
    </div>
@endunless



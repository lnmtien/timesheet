@if ($breadcrumbs)
    @if (count($breadcrumbs) == 1)
        @foreach ($breadcrumbs as $breadcrumb)
            <h3 class="m-subheader__title m-subheader__title--separator">{{ $breadcrumb->title }}</h3>
        @endforeach
    @else
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->first)
                <h3 class="m-subheader__title m-subheader__title--separator">{{ $breadcrumb->title }}</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
            @else
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="{{ $breadcrumb->url }}" class="m-nav__link">
                            <span class="m-nav__link-text">{{ $breadcrumb->title }}</span>
                        </a>
                    </li>
            @endif
            @if ($breadcrumb->last)
                </ul>
            @endif
        @endforeach
    @endif
@endif
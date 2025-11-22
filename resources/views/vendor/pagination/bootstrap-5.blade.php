@if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-between">
        {{-- Mobile View --}}
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pagination">
                {{-- Previous Page --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">@lang('pagination.previous')</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                            @lang('pagination.previous')
                        </a>
                    </li>
                @endif

                {{-- Next Page --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
                            @lang('pagination.next')
                        </a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">@lang('pagination.next')</span>
                    </li>
                @endif
            </ul>
        </div>

        {{-- Desktop View --}}
        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
            <div>
                <ul class="pagination">

                    {{-- Previous arrow --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&lsaquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&lsaquo;</a>
                        </li>
                    @endif

                    {{-- =======================================
                        CUSTOM PAGINATION WITH ELLIPSIS
                    ======================================== --}}
                    @php
                        $current = $paginator->currentPage();
                        $last = $paginator->lastPage();

                        // Range to show around current page
                        $start = max(1, $current - 1);
                        $end = min($last, $current + 1);
                    @endphp

                    {{-- Show page 1 --}}
                    @if ($current == 1)
                        <li class="page-item active"><span class="page-link">1</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $paginator->url(1) }}">1</a></li>
                    @endif

                    {{-- Ellipsis after 1 --}}
                    @if ($start > 2)
                        <li class="page-item disabled"><span class="page-link">...</span></li>
                    @endif

                    {{-- Middle pages --}}
                    @for ($i = $start; $i <= $end; $i++)
                        @if ($i != 1 && $i != $last)
                            @if ($i == $current)
                                <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                            @endif
                        @endif
                    @endfor

                    {{-- Ellipsis before last page --}}
                    @if ($end < $last - 1)
                        <li class="page-item disabled"><span class="page-link">...</span></li>
                    @endif

                    {{-- Last page --}}
                    @if ($last > 1)
                        @if ($current == $last)
                            <li class="page-item active"><span class="page-link">{{ $last }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $paginator->url($last) }}">{{ $last }}</a></li>
                        @endif
                    @endif

                    {{-- Next arrow --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&rsaquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">&rsaquo;</span>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endif

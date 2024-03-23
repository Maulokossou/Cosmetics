<div>
    @if ($paginator->hasPages())
        <div class="bottom-paginate">
            <p class="page-info"></p>
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true">
                        <a class="page-link" href="#">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </a>
                    </li>
                @else
                    <li class="page-item">
                        <a type="button" class="page-link" wire:click="previousPage" wire:loading.attr="disabled"
                            rel="prev">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                    @endif
                    <!-- Array Of Links -->
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            <!--  Use three dots when current page is greater than 4.  -->
                            @if ($paginator->currentPage() > 4 && $page === 2)
                                <li class="page-item disabled"><span class="page-link">...</span></li>
                            @endif

                            <!--  Show active page else show the first and last two pages from current page.  -->
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active">
                                    <span class="page-link">{{ $page }}</span>
                                </li>
                            @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2 || $page === $paginator->lastPage() || $page === 1)
                                <li class="page-item">
                                    <a type="button" class="page-link" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')">{{ $page }}</a>
                                </li>
                            @endif
                            <!--  Use three dots when current page is away from end.  -->
                            @if ($paginator->currentPage() < $paginator->lastPage() - 3 && $page === $paginator->lastPage() - 1)
                                <li class="page-item disabled"><span class="page-link">...</span></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a type="button" class="page-link" wire:click="nextPage()" wire:loading.attr="disabled">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </li>
                @else
                    <li class="page-item" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <a class="page-link disabled" aria-hidden="true">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    @endif
</div>
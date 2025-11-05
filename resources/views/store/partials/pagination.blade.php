@if ($products->hasPages())
    <nav aria-label="Page navigation">
        <ul class="pagination ul-mt5 align-items-center justify-content-center pagination-box">
            {{-- First Page --}}
            <li class="page-item first {{ $products->onFirstPage() ? 'disabled' : '' }}">
                <a href="javascript:void(0)"
                   class="page-link p-0 m-0 bg-transparent heading-weight border-0 lh-1"
                   data-page="1"
                   aria-label="First page">First</a>
            </li>

            {{-- Previous Page --}}
            <li class="page-item prev {{ $products->onFirstPage() ? 'disabled' : '' }}">
                <a href="javascript:void(0)"
                   class="page-link icon-16 d-flex align-items-center justify-content-center p-0 m-0 bg-transparent heading-weight border-0 border-radius"
                   data-page="{{ $products->currentPage() - 1 }}"
                   aria-label="Previous">
                    <i class="ri-arrow-left-line d-block lh-1"></i>
                </a>
            </li>

            {{-- Page Numbers --}}
            @foreach(range(1, $products->lastPage()) as $page)
                @if($page == $products->currentPage())
                    <li class="page-item">
                        <a href="javascript:void(0)"
                           class="page-link active d-flex align-items-center justify-content-center p-0 m-0 heading-weight border-0 border-radius lh-1"
                           data-page="{{ $page }}"
                           aria-label="Page number">{{ $page }}</a>
                    </li>
                @elseif($page == 1 || $page == $products->lastPage() || abs($page - $products->currentPage()) <= 2)
                    <li class="page-item">
                        <a href="javascript:void(0)"
                           class="page-link d-flex align-items-center justify-content-center p-0 m-0 heading-weight border-0 border-radius lh-1"
                           data-page="{{ $page }}"
                           aria-label="Page number">{{ $page }}</a>
                    </li>
                @elseif(abs($page - $products->currentPage()) == 3)
                    <li class="page-item disabled">
                        <span class="page-link">...</span>
                    </li>
                @endif
            @endforeach

            {{-- Next Page --}}
            <li class="page-item next {{ !$products->hasMorePages() ? 'disabled' : '' }}">
                <a href="javascript:void(0)"
                   class="page-link icon-16 d-flex align-items-center justify-content-center p-0 m-0 bg-transparent heading-weight border-0 border-radius"
                   data-page="{{ $products->currentPage() + 1 }}"
                   aria-label="Next">
                    <i class="ri-arrow-right-line d-block lh-1"></i>
                </a>
            </li>

            {{-- Last Page --}}
            <li class="page-item last {{ !$products->hasMorePages() ? 'disabled' : '' }}">
                <a href="javascript:void(0)"
                   class="page-link p-0 m-0 bg-transparent heading-weight border-0 lh-1"
                   data-page="{{ $products->lastPage() }}"
                   aria-label="Last page">Last</a>
            </li>
        </ul>
    </nav>
@endif

@if ($paginator->lastPage() != 1)
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <!-- Link alla pagina precedente -->
                    @if ($paginator->currentPage() != 1)
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}">Precedente</a>
                    @else
                    <a class="page-link" href="">Precendente</a>
                    @endif
                </li>
                <li class="page-item">
                    <!-- Link alla prima pagina -->
                    @if (!$paginator->onFirstPage())
                    <a class="page-link" href="{{ $paginator->url(1) }}">1</a>
                    @else
                    <a class="page-link" href="">1</a>
                    @endif
                </li>
                <li class="page-item">
                    @if ($paginator->currentPage() != 1 && $paginator->currentPage() != 2)
                    <a class="page-link">...</a>
                    @endif
                </li>
                <li class="page-item">
                    <!-- Link alla pagina corrente -->
                    @if ($paginator->currentPage() != 1 && $paginator->currentPage() != $paginator->lastPage())
                    <a class="page-link" href="">{{ $paginator->currentPage() }}</a>
                    @endif
                </li>
                <li class="page-item">
                    @if ($paginator->currentPage() != $paginator->lastPage() && $paginator->currentPage() != $paginator->lastPage()-1)
                    <a class="page-link">...</a>
                    @endif
                </li>
                <li class="page-item">
                    <!-- Link all'ultima pagina -->
                    @if ($paginator->hasMorePages())
                    <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a>
                    @else
                    <a class="page-link" href="">{{ $paginator->lastPage() }}</a>
                    @endif
                </li>
                <li class="page-item">
                    <!-- Link alla pagina successiva -->
                    @if ($paginator->hasMorePages())
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Successivo</a>
                    @else
                    <a class="page-link" href="">Successivo</a>
                    @endif
                </li>
            </ul>
        </nav>
    </div>
</div>
@endif
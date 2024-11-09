<div style="padding-top: 1%;
    text-align: end;">
    <div class="pagination" style="text-align: end">


        <!-- Previous Page -->
        @if ($data->onFirstPage())
            <a href="#">&laquo;</a>
        @else
            <a href="{{ $data->previousPageUrl() }}">&laquo;</a>
        @endif

        <!-- Page Links -->
        @for ($page = max(1, $data->currentPage() - 2); $page <= min($data->lastPage(), $data->currentPage() + 2); $page++)
            <a href="{{ $data->url($page) }}"
                class=" @if ($page == $data->currentPage()) active disabled @endif">{{ $page }}</a>
        @endfor

        <!-- Next Page -->
        @if ($data->hasMorePages())
            <a href="{{ $data->nextPageUrl() }}">&raquo;</a>
        @else
            <a href="#">&raquo;</a>
        @endif


    </div>
</div>

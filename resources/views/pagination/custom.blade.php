@if ($paginator->lastPage() > 1)
<ul class="pagination">
    @if($paginator->currentPage() != 1)
    <div class="pag_nav_prev" onclick="location.href='{{$paginator->url($paginator->currentPage()-1)}}';"></div>
    @endif
    @if($paginator->currentPage() - 1 >= 1)
    <div class="pag_nav" onclick="location.href='{{ $paginator->url($paginator->currentPage()-1) }}';">{{ $paginator->currentPage()-1 }}</div>
    @endif
    <div class="pag_nav_active" onclick="location.href='{{ $paginator->url($paginator->currentPage()) }}';">{{ $paginator->currentPage() }}</div>
    @if($paginator->currentPage() + 1 < $paginator-> lastPage())
    <div class="pag_nav" onclick="location.href='{{ $paginator->url($paginator->currentPage()+1) }}';">{{ $paginator->currentPage()+1 }}</div>
    @endif
    @if($paginator->currentPage() + 1 < $paginator-> lastPage() -1 && $paginator->currentPage() + 2 < $paginator-> lastPage() -1)
    <div class="pag_nav">...</div>
    @endif
    @if($paginator-> currentPage() < $paginator-> lastPage() - 1 && $paginator->currentPage() + 1 != $paginator-> lastPage() -1)
    <div class="pag_nav" onclick="location.href='{{ $paginator->url($paginator-> lastPage() - 1) }}';">{{ $paginator-> lastPage()-1 }}</div>
    @endif
    @if($paginator-> currentPage() < $paginator-> lastPage())
    <div class="pag_nav" onclick="location.href='{{ $paginator->url($paginator-> lastPage()) }}';">{{ $paginator-> lastPage() }}</div>
    @endif
    @if($paginator->currentPage() != $paginator-> lastPage())
    <div class="pag_nav_next" onclick="location.href='{{ $paginator->url($paginator->currentPage() + 1) }}';"></div>
    @endif

</ul>
@endif


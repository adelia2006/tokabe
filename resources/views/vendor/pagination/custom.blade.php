@if ($paginator->hasPages())
    @php
        $start = max(1, $paginator->currentPage() - 2);
        $end = min($paginator->lastPage(), $paginator->currentPage() + 2);
        if ($end - $start < 4) {
            if ($start == 1) {
                $end = min($paginator->lastPage(), 5);
            } else {
                $start = max(1, $paginator->lastPage() - 4);
            }
        }
    @endphp

    <div class="w-full flex justify-center py-4">
        <nav class="inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="relative inline-flex items-center px-3 sm:px-4 py-2 rounded-l-md border border-white/10 bg-[#1A0F07] text-sm font-medium text-gray-600 cursor-not-allowed">
                    <i class="fas fa-chevron-left text-xs"></i>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-3 sm:px-4 py-2 rounded-l-md border border-white/10 bg-[#2E1E10] text-sm font-medium text-gray-300 hover:bg-[#3D2514] hover:text-[#D4A569] transition-colors">
                    <i class="fas fa-chevron-left text-xs"></i>
                </a>
            @endif

            {{-- Array Of Links (Max 5 items) --}}
            @for ($page = $start; $page <= $end; $page++)
                @if ($page == $paginator->currentPage())
                    <span class="relative inline-flex items-center px-4 py-2 border border-[#C8902A] bg-gradient-to-r from-[#D4A569] to-[#C8902A] text-sm font-bold text-white z-10 shadow-inner">
                        {{ $page }}
                    </span>
                @else
                    <a href="{{ $paginator->url($page) }}" class="relative inline-flex items-center px-4 py-2 border border-white/10 bg-[#2E1E10] text-sm font-medium text-gray-300 hover:bg-[#3D2514] hover:text-[#D4A569] transition-colors">
                        {{ $page }}
                    </a>
                @endif
            @endfor

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-3 sm:px-4 py-2 rounded-r-md border border-white/10 bg-[#2E1E10] text-sm font-medium text-gray-300 hover:bg-[#3D2514] hover:text-[#D4A569] transition-colors">
                    <i class="fas fa-chevron-right text-xs"></i>
                </a>
            @else
                <span class="relative inline-flex items-center px-3 sm:px-4 py-2 rounded-r-md border border-white/10 bg-[#1A0F07] text-sm font-medium text-gray-600 cursor-not-allowed">
                    <i class="fas fa-chevron-right text-xs"></i>
                </span>
            @endif
        </nav>
    </div>
@endif

<nav aria-label="Page navigation" style="display:block; width:unset; height:unset;" >
    @if ($paginator->hasPages())
    <ul class="pagination" style="justify-content: end;">
       
        @if ($paginator->onFirstPage())
        <li class="page-item prev">
            <a class="page-link" style="font-size: 14px;" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
        </li>
            <!-- <li class="disabled"><span>← Previous</span></li> -->
        @else
            
            <li class="page-item prev">
                <a class="page-link" style="font-size: 14px;" href="{{ $paginator->previousPageUrl() }}"><i class="tf-icon bx bx-chevrons-left"></i></a>
            </li>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a class="page-link" style="font-size: 14px;" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" style="font-size: 14px;" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <li class="page-item next">
                <a class="page-link"style="font-size: 14px;" href="{{ $paginator->nextPageUrl() }}"><i class="tf-icon bx bx-chevrons-right"></i></a>
            </li>
        @else
        <li class="page-item next">
                <a class="page-link"style="font-size: 14px;" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
            </li>
        @endif
    </ul>
@endif 
</nav>
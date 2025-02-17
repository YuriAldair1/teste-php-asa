@props(['links' => []])
<nav class="nav">
    @foreach ($links as $link)
        <a class=" text-decoration-none text-fark {{request()->routeIs($link['route']) == $link['route'] ? ' bg-secondary text-white px-2 rounded-3': ''}} " href="{{ route($link['route']) }}">
            {{ $link['label'] }}
            
            
        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    @endforeach
</nav>

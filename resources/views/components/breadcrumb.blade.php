@props([
    'items' => [],
    'class' => '',
    'separator' => '/',
    'homeIcon' => true
])

<nav aria-label="breadcrumb" class="mb-3 {{ $class }}">
    <ol class="breadcrumb">
        @foreach($items as $item)
            <li class="breadcrumb-item {{ !isset($item['url']) || $loop->last ? 'active' : '' }}" 
                {!! $loop->last ? 'aria-current="page"' : '' !!}>
                @if(isset($item['url']) && !$loop->last)
                    <a href="{{ $item['url'] }}">
                        {{ $item['name'] }}
                    </a>
                @else
                    {{ $item['name'] }}
                @endif
            </li>
        @endforeach
    </ol>
</nav>
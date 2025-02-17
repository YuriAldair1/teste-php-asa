@props([
    'type' => 'button',
    'variant' => 'primary',    // primary, secondary, success, danger, warning, info, light, dark
    'size' => '',             // sm, lg
    'outline' => false,
    'disabled' => false,
    'onClick' => '',
    'block' => false,         // faz o botão ocupar 100% da largura
    'loading' => false
])

@php
    $baseClasses = 'btn';
    
    // Variant class
    $variantClass = $outline 
        ? "btn-outline-{$variant}" 
        : "btn-{$variant}";
    
    // Size class
    $sizeClass = $size ? "btn-{$size}" : '';
    
    // Block class (Bootstrap 5 usa d-grid gap-2 no parent e w-100 no botão)
    $blockClass = $block ? 'w-100' : '';
    
    // Disabled state
    $disabledAttr = $disabled ? 'disabled' : '';
    
    // Loading state
    $loadingClass = $loading ? 'disabled' : '';
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => trim("{$baseClasses} {$variantClass} {$sizeClass} {$blockClass} {$loadingClass}")
    ]) }}
    @if($onClick) onclick="{{ $onClick }}" @endif
    {{ $disabledAttr }}
>
    
    <div wire:loading>
        <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
    </div>
            
    {{ $slot }}
</button>
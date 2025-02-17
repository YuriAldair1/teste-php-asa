@props([
    'placeholder' => '',
    'label' => '',
    'name',
    'value' => '',
    'disabled' => false,
    'icon' => '',
    'type' => 'text',
    'hasError' => false,
])

<div class="mb-3 position-relative">
    <label for="{{ $name }}" class="form-label">
        @if ($errors->has($name))
            {{ $errors->first($name) }}
        @else
            {{ $label }}
        @endif

    </label>

    <div class="input-group">
        @if ($icon)
            <div class="input-group-prepend">
                <span class="input-group-text">
                    {!! $icon !!}
                </span>
            </div>
        @endif

        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
            value="{{ old($name, $value) }}" @if ($disabled) disabled @endif
            placeholder="{{ $placeholder ?: $label }}"
            {{ $attributes->merge([
                'class' => 'form-control ' . ($hasError || $errors->has($name) ? 'is-invalid' : ''),
            ]) }}
            {{ $attributes }}>
    </div>
</div>

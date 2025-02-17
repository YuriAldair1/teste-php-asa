@props([
    'name',
    'label' => '',
    'options' => [],
    'selected' => null,
    'placeholder' => '',
    'required' => false,
    'disabled' => false,
    'class' => '',
    'error' => null,
    'hasError' => false,
    'wireModel' => null,
])

<div class="form-group">
    @if ($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">
            @if ($errors->has($name))
                {{ $errors->first($name) }}
            @else
                {{ $label }}
            @endif
        </label>
    @endif

    
    <select name="{{ $name }}" id="{{ $name }}" {{ $required ? 'required' : '' }}
        {{ $disabled ? 'disabled' : '' }} {{ $wireModel ? "wire:model.lazy=\"$wireModel\"" : '' }}
        {{ $attributes->merge(['class' => 'form-control' . ($hasError || $errors->has($name) ? ' is-invalid' : '') . ' ' . $class]) }}>
        <option value="">{{ $placeholder }}</option>
        @foreach ($options ?? [] as $option)
            <option value="{{ is_object($option) ? $option->id : $option['id'] ?? $option }}"
                {{ $selected == (is_object($option) ? $option->id : $option['id'] ?? $option) ? 'selected' : '' }}>
                {{ is_object($option) ? $option->name : $option['name'] ?? $option }}
            </option>
        @endforeach
    </select>
</div>

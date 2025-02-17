@props([
    'name',
    'label' => '',
    'value' => null,
    'required' => false,
    'disabled' => false,
    'class' => '',
    'error' => null,
    'placeholder' => 'dd/mm/aaaa',
    'wireModel' => null,
    'min' => null,
    'max' => null,
])

@php
    // Se o valor vier pelo wire:model, precisamos formatá-lo
    if ($wireModel) {
        // Obtém o valor do modelo do Livewire
        $modelValue = $this->$wireModel ?? null;

        // Se tiver um valor e for uma string de data válida
        if ($modelValue && strtotime($modelValue)) {
            $value = date('Y-m-d', strtotime($modelValue));
        }
    }
@endphp

<div class="form-group">
    @if ($label)
        <label for="{{ $name }}" class="form-label">
            @if ($errors->has($name))
                {{ $errors->first($name) }}
            @else
                {{ $label }}
            @endif
            @if ($required)
                <span class="text-danger">*</span>
            @endif
        </label>
    @endif

    <input type="date" id="{{ $name }}" name="{{ $name }}"
        {{ $wireModel ? "wire:model=$wireModel" : '' }} value="{{ $value }}" {{ $required ? 'required' : '' }}
        {{ $disabled ? 'disabled' : '' }} {{ $min ? "min=$min" : '' }} {{ $max ? "max=$max" : '' }}
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge(['class' => 'form-control ' . ($errors->has($name) ? 'is-invalid' : '') . ' ' . $class]) }} />

    @if ($error)
        <div class="invalid-feedback">
            {{ $error }}
        </div>
    @endif
</div>

@push('styles')
    <style>
        input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
            padding: 5px;
            margin-right: 5px;
        }

        input[type="date"]:focus::-webkit-datetime-edit-text,
        input[type="date"]:focus::-webkit-datetime-edit-year-field,
        input[type="date"]:focus::-webkit-datetime-edit-month-field,
        input[type="date"]:focus::-webkit-datetime-edit-day-field {
            color: transparent;
        }
    </style>
@endpush

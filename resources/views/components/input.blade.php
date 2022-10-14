@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'h-10 border border-gray-300 bg-gray-100 rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm',
]) !!}>

@if (Arr::has($attributes, 'wire:model'))
    @error($attributes['wire:model'])
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $message }}</span>
    @enderror
@endif
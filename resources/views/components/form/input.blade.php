@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <input class="border border-gray-300 p-2 rounded w-full" name="{{ $name }}" id="{{ $name }}"
        {{ $attributes(['vlaue' => old($name)]) }}>

    <x-form.error name="{{ $name }}" />
</x-form.field>

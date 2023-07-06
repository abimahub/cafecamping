@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>

    <input class="border text-green-600 border-green-200 p-2 w-full rounded"
           name="{{ $name }}"
           id="{{ $name }}"
           {{ $attributes(['value' => old($name)]) }}
    >

    <x-form.error name="{{ $name }}"/>
</x-form.field>

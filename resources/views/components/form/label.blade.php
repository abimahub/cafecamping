@props(['name'])

<label class="block mb-2 uppercase font-bold text-xs text-green-700"
       for="{{ $name }}"
>
    {{ ucwords($name) }}
</label>

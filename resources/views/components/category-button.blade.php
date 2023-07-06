@props(['category'])

<a href="/?category={{ $category->slug }}"
   class="px-3 py-1 border border-gray-500 rounded-xl bg-yellow-100 text-gray-800 text-xs uppercase font-semibold"
   style="font-size: 10px"
>{{ $category->name }}</a>

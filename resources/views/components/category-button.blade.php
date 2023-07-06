@props(['category'])

<a href="/?category={{ $category->slug }}"
   class="px-3 py-1 border border-green-700 rounded-xl bg-white text-green-600 text-xs uppercase font-semibold"
   style="font-size: 10px"
>{{ $category->name }}</a>

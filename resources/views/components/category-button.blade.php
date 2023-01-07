@props(['category', 'color'])
<div class="space-x-2">
    <a href="/categories/{{ $category->slug }}"
        class="px-3 py-1 border border-{{ $category->color }}-300 rounded-full text-{{ $category->color }}-300 text-xs uppercase font-semibold"
        style="font-size: 10px">{{ $category->name }}
    </a>
</div>

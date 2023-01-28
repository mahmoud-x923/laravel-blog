@props(['type' => 'button'])
<button type={{ $type }}
    class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
    {{ $slot }}
</button>

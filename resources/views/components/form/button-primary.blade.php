@props(['type' => 'button'])

<x-form.field>

    <button type={{ $type }}
        class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 lg:mt-0 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
        {{ $slot }}
    </button>

</x-form.field>

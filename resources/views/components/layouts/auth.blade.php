<x-layouts.default>
    <div class="flex flex-col justify-center items-center min-h-[100vh]">
        <div class="mb-12">
            <h1 class="font-bold text-5xl text-white">
                ByteMind
                <span class="icon-[tabler--code] size-12.5  text-white "></span>
            </h1>
        </div>
        <div class="mt-8">
            {{ $slot }}
        </div>
    </div>

</x-layouts.default>
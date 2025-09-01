<x-layouts.default>
    <div class="flex flex-col justify-center items-center min-h-[100vh]">
        <div class="mb-12">
            <h1 class="font-bold text-6xl sm:text-8xl md:text-10xl text-white">
                ByteMind
                <span class="icon-[tabler--code] size-12 sm:size-14 md:size-16 text-white"></span>
            </h1>
        </div>
        <div class="w-full px-4 sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl mt-8">
            {{ $slot }}
        </div>

    </div>

</x-layouts.default>

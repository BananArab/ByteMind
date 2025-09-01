<x-layouts.default>
    <div class="flex flex-col justify-center items-center min-h-[100vh]">
        <div class="mb-12">
            <h1 class="font-bold text-3xl sm:text-4xl md:text-5xl text-white">
                ByteMind
                <span class="icon-[tabler--code] size-8 sm:size-10 md:size-12 text-white"></span>
            </h1>
        </div>
        <div class="w-full px-4 sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl mt-8">
            {{ $slot }}
        </div>

    </div>

</x-layouts.default>

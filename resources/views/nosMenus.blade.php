<x-app-layout>
    <!-- Hero Section Orange -->
    <section class="w-full bg-[#E67E22] pt-16 pb-12 mt-16">
        <div class="max-w-7xl mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-bold text-white uppercase">NOS MENUS</h1>
        </div>
    </section>

    <!-- Section Menus -->
    <section class="w-full bg-[#EFE0D2] py-16 min-h-screen">
        <div class="max-w-[1600px] mx-auto px-6">
            <!-- Grille de menus -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-4 gap-6 max-w-7xl mx-auto">
                @foreach($menus as $menu)
                    <a href="{{ route('menu.show', $menu->slug) }}" class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col max-w-sm mx-auto w-full hover:shadow-xl transition-shadow duration-300">
                        <img src="{{ $menu->image }}"
                             alt="{{ $menu->titre }}"
                             class="w-full h-56 object-cover">

                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-sm font-bold text-gray-800 mb-2 leading-tight min-h-[42px]">{{ $menu->titre }}</h3>
                            <p class="text-xs text-gray-600 mb-4 flex-grow">{{ $menu->description }}</p>

                            <div class="mt-auto">
                                <p class="text-[10px] font-semibold text-gray-700 mb-2 tracking-wider">NUTRI-SCORE</p>
                                <div class="flex gap-1">
                                    <span class="bg-[#038141] text-white text-xs font-bold px-2.5 py-1.5 rounded {{ $menu->nutriscore == 'A' ? 'ring-2 ring-gray-800' : 'opacity-40' }}">A</span>
                                    <span class="bg-[#85BB2F] text-white text-xs font-bold px-2.5 py-1.5 rounded {{ $menu->nutriscore == 'B' ? 'ring-2 ring-gray-800' : 'opacity-40' }}">B</span>
                                    <span class="bg-[#FECB02] text-white text-xs font-bold px-2.5 py-1.5 rounded {{ $menu->nutriscore == 'C' ? 'ring-2 ring-gray-800' : 'opacity-40' }}">C</span>
                                    <span class="bg-[#EE8100] text-white text-xs font-bold px-2.5 py-1.5 rounded {{ $menu->nutriscore == 'D' ? 'ring-2 ring-gray-800' : 'opacity-40' }}">D</span>
                                    <span class="bg-[#E63E11] text-white text-xs font-bold px-2.5 py-1.5 rounded {{ $menu->nutriscore == 'E' ? 'ring-2 ring-gray-800' : 'opacity-40' }}">E</span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>

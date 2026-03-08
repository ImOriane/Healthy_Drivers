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

    <div id="chat-container">
    <div onclick="toggleHealthyChat()" class="fixed bottom-6 right-6 w-16 h-16 bg-[#365413] rounded-full flex items-center justify-center cursor-pointer shadow-2xl hover:scale-110 transition-transform z-[999]">
        <span class="absolute top-0 right-0 h-4 w-4 rounded-full border-2 border-white bg-[#F37021]"></span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
        </svg>
    </div>

    <div id="healthy-chat-window" class="fixed bottom-24 right-6 w-80 md:w-96 h-[500px] bg-white rounded-2xl shadow-2xl z-[999] hidden flex-col overflow-hidden border border-gray-100 font-sans">
        <div class="bg-[#F37021] p-4 text-white flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-[#F37021] font-bold">HD</div>
                <div class="text-left">
                    <p class="font-bold text-sm">Coach Nutrition</p>
                    <p class="text-[10px] opacity-90 flex items-center"><span class="w-2 h-2 bg-green-400 rounded-full mr-1"></span> Disponible</p>
                </div>
            </div>
            <button onclick="toggleHealthyChat()" class="text-2xl">&times;</button>
        </div>
        <div class="flex-1 p-4 bg-[#F9F3EE] overflow-y-auto space-y-4 text-left">
            <div class="bg-white p-3 rounded-2xl rounded-tl-none shadow-sm text-sm text-gray-800 max-w-[85%] border-l-4 border-[#365413]">
                Bonjour ! Je suis votre coach personnel Healthy Drivers. Comment puis-je vous aider aujourd'hui ?
            </div>
        </div>
        <div class="p-4 border-t bg-white flex gap-2">
            <input type="text" placeholder="Posez votre question..." class="flex-1 bg-gray-100 rounded-full px-4 py-2 text-sm outline-none focus:ring-1 focus:ring-[#F37021]">
            <button class="bg-[#365413] text-white p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-90" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" /></svg>
            </button>
        </div>
    </div>
</div>

<script>
    function toggleHealthyChat() {
        const win = document.getElementById('healthy-chat-window');
        win.classList.toggle('hidden');
    }
</script>

</x-app-layout>

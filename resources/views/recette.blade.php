<x-app-layout>
    @php
        $isSubscribed = auth()->check() && auth()->user()->is_subscribed;
    @endphp
    <!-- Hero Section avec le titre de la recette -->
    <section class="w-full bg-[#E67E22] pt-16 pb-12 mt-16">
        <div class="max-w-7xl mx-auto px-6">
            <a href="{{ url('/menus') }}" class="inline-flex items-center text-white hover:text-gray-200 mb-4 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Retour aux menus
            </a>
            <h1 class="text-4xl md:text-5xl font-bold text-white uppercase">{{ $menu->titre }}</h1>
        </div>
    </section>

    <!-- Section principale -->
    <section class="w-full bg-[#EFE0D2] py-16 min-h-screen">
        <div class="max-w-6xl mx-auto px-6">

            @if(!$isSubscribed)
                <!-- Version verrouillée - Image floutée avec overlay -->
                <div class="relative mb-12">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset($menu->image) }}"
                             alt="{{ $menu->titre }}"
                             class="w-full h-[500px] object-cover blur-sm">
                    </div>

                    <!-- Overlay de verrouillage centré -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-12 text-center max-w-md">
                            <div class="bg-[#E67E22] w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">S'abonner pour déverouiller</h2>
                            <p class="text-gray-600 mb-6">Accédez à cette recette et à tout notre catalogue en vous abonnant</p>
                            <a href="{{ url('/abonnements') }}" class="inline-block bg-[#6B8E23] hover:bg-[#5a7a1e] text-white font-bold py-3 px-8 rounded-lg transition-colors duration-300">
                                Voir les abonnements
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Informations de base visibles mais simplifiées -->
                <div class="bg-white/50 backdrop-blur-sm rounded-2xl shadow-lg p-8 mb-8">
                    <p class="text-gray-600 mb-6">{{ $menu->description }}</p>

                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-white p-4 rounded-lg text-center">
                            <svg class="w-6 h-6 text-[#E67E22] mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm text-gray-500">Temps</p>
                            <p class="text-xl font-bold text-gray-800">{{ $menu->temps_preparation }} min</p>
                        </div>

                        <div class="bg-white p-4 rounded-lg text-center">
                            <svg class="w-6 h-6 text-[#E67E22] mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <p class="text-sm text-gray-500">Calories</p>
                            <p class="text-xl font-bold text-gray-800">{{ $menu->calories }} kcal</p>
                        </div>

                        <div class="bg-white p-4 rounded-lg text-center">
                            <p class="text-sm text-gray-500 mb-2">Nutri-Score</p>
                            <div class="flex gap-1 justify-center">
                                <span class="bg-[#038141] text-white text-xs font-bold px-2 py-1 rounded {{ $menu->nutriscore == 'A' ? 'ring-2 ring-gray-800' : 'opacity-40' }}">A</span>
                                <span class="bg-[#85BB2F] text-white text-xs font-bold px-2 py-1 rounded {{ $menu->nutriscore == 'B' ? 'ring-2 ring-gray-800' : 'opacity-40' }}">B</span>
                                <span class="bg-[#FECB02] text-white text-xs font-bold px-2 py-1 rounded {{ $menu->nutriscore == 'C' ? 'ring-2 ring-gray-800' : 'opacity-40' }}">C</span>
                                <span class="bg-[#EE8100] text-white text-xs font-bold px-2 py-1 rounded {{ $menu->nutriscore == 'D' ? 'ring-2 ring-gray-800' : 'opacity-40' }}">D</span>
                                <span class="bg-[#E63E11] text-white text-xs font-bold px-2 py-1 rounded {{ $menu->nutriscore == 'E' ? 'ring-2 ring-gray-800' : 'opacity-40' }}">E</span>
                            </div>
                        </div>
                    </div>
                </div>

            @else
                <!-- Version déverrouillée - Contenu complet comme avant -->
                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <!-- Image de la recette -->
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset($menu->image) }}"
                             alt="{{ $menu->titre }}"
                             class="w-full h-full object-cover">
                    </div>

                    <!-- Informations générales -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <p class="text-gray-600 mb-6">{{ $menu->description }}</p>

                        <!-- Infos rapides -->
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="bg-[#EFE0D2] p-4 rounded-lg">
                                <div class="flex items-center mb-2">
                                    <svg class="w-5 h-5 text-[#E67E22] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-sm font-semibold text-gray-700">TEMPS</span>
                                </div>
                                <p class="text-2xl font-bold text-gray-800">{{ $menu->temps_preparation }} min</p>
                            </div>

                            <div class="bg-[#EFE0D2] p-4 rounded-lg">
                                <div class="flex items-center mb-2">
                                    <svg class="w-5 h-5 text-[#E67E22] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    <span class="text-sm font-semibold text-gray-700">CALORIES</span>
                                </div>
                                <p class="text-2xl font-bold text-gray-800">{{ $menu->calories }} kcal</p>
                            </div>
                        </div>

                        <!-- Nutri-Score -->
                        <div class="mb-6">
                            <p class="text-xs font-semibold text-gray-700 mb-3 tracking-wider">NUTRI-SCORE</p>
                            <div class="flex gap-2">
                                <span class="bg-[#038141] text-white text-sm font-bold px-4 py-2 rounded {{ $menu->nutriscore == 'A' ? 'ring-2 ring-gray-800' : 'opacity-40' }}">A</span>
                                <span class="bg-[#85BB2F] text-white text-sm font-bold px-4 py-2 rounded {{ $menu->nutriscore == 'B' ? 'ring-2 ring-gray-800' : 'opacity-40' }}">B</span>
                                <span class="bg-[#FECB02] text-white text-sm font-bold px-4 py-2 rounded {{ $menu->nutriscore == 'C' ? 'ring-2 ring-gray-800' : 'opacity-40' }}">C</span>
                                <span class="bg-[#EE8100] text-white text-sm font-bold px-4 py-2 rounded {{ $menu->nutriscore == 'D' ? 'ring-2 ring-gray-800' : 'opacity-40' }}">D</span>
                                <span class="bg-[#E63E11] text-white text-sm font-bold px-4 py-2 rounded {{ $menu->nutriscore == 'E' ? 'ring-2 ring-gray-800' : 'opacity-40' }}">E</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ingrédients et Préparation -->
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Ingrédients -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                            <svg class="w-6 h-6 text-[#E67E22] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                            Ingrédients
                        </h2>
                        <ul class="space-y-3">
                            @foreach($menu->ingredients as $ingredient)
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-[#E67E22] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">{{ $ingredient }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Préparation -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                            <svg class="w-6 h-6 text-[#E67E22] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            Préparation
                        </h2>
                        <ol class="space-y-4">
                            @foreach($menu->preparation as $index => $etape)
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 w-8 h-8 bg-[#E67E22] text-white rounded-full flex items-center justify-center font-bold mr-4">
                                        {{ $index + 1 }}
                                    </span>
                                    <p class="text-gray-700 pt-1">{{ $etape }}</p>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            @endif

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

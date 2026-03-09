<x-app-layout>
    <div class="bg-[#EFE0D2] h-screen flex flex-col">

        <section class="w-full bg-[#E67E22] pt-16 pb-12 mt-16"> <div class="max-w-7xl mx-auto"> <h1 class="text-4xl md:text-5xl font-bold text-white">ABONNEMENTS</h1> </div> </section>

        <section class="flex-grow container mx-auto px-6 py-6 flex flex-wrap justify-center gap-36 items-center">

            <div class="bg-white max-w-[240px] shadow-lg relative flex flex-col min-h-[390px]">
                <div class="h-4 bg-[#9CD83C]"></div>
                <div class="p-6 flex flex-col justify-between">

                    <div class="flex flex-col mb-6 text-center">
                        <h2 class="text-[#365413] font-bold uppercase text-lg mb-2 ">Économique</h2>
                        <p class="text-3xl font-extrabold mb-2">€47.99 <span class="text-base font-normal text-gray-600">/mois</span></p>
                        <p class="bg-[#FFD2B3] text-[#F37021] text-xs font-semibold uppercase inline-block py-1 px-3 rounded">
                            7.99€/repas
                        </p>
                    </div>

                    <ul class="text-[#365413]  text-sm space-y-2 mb-6">
                        <li>🥕 6 repas par semaine</li>
                        <li>🥕 Mise en relation avec coach nutritionnel</li>
                        <li>🥕 Accès au recettes proposées sur le site web</li>
                    </ul>

                    <a href="{{ url('/demo-subscribe1') }}" class="w-full bg-[#F37021] text-white font-bold py-2 hover:bg-[#d75a00] transition text-center inline-block">
                        Choisir
                    </a>
                </div>
            </div>

            <div class="bg-white max-w-[240px] shadow-lg relative flex flex-col min-h-[390px]">
                <div class="h-4 bg-[#9CD83C]"></div>
                <div class="p-6 flex flex-col justify-between">

                    <div class="flex flex-col mb-6 text-center">
                        <h2 class="text-[#365413] font-bold uppercase text-lg mb-2">Classique</h2>
                        <p class="text-3xl font-extrabold mb-2">€59.99 <span class="text-base font-normal text-gray-600">/mois</span></p>
                        <p class="bg-[#FFD2B3] text-[#F37021] text-xs font-semibold uppercase inline-block py-1 px-3 rounded">
                            8,99€/repas
                        </p>
                    </div>

                    <ul class="text-[#365413] text-sm space-y-2 mb-6">
                        <li>🥕 10 repas par semaine</li>
                        <li>🥕 Mise en relation avec coach nutritionnel</li>
                        <li>🥕 Accès recettes adaptées à la continuité de votre régime</li>
                    </ul>

                    <a href="{{ url('/demo-subscribe2') }}" class="w-full bg-[#F37021] text-white font-bold py-2 hover:bg-[#d75a00] transition text-center inline-block">
                        Choisir
                    </a>
                </div>
            </div>

            <div class="bg-white max-w-[240px] shadow-lg relative flex flex-col min-h-[390px]">
                <div class="h-4 bg-[#9CD83C]"></div>
                <div class="p-6 flex flex-col justify-between">

                    <div class="flex flex-col mb-6 text-center">
                        <h2 class="text-[#365413] font-bold uppercase text-lg mb-2">Premium</h2>
                        <p class="text-3xl font-extrabold mb-2">€70.0 <span class="text-base font-normal text-gray-600">/mois</span></p>
                        <p class="bg-[#FFD2B3] text-[#F37021] text-xs font-semibold uppercase inline-block py-1 px-3 rounded">
                            5.0€/repas
                        </p>
                    </div>

                    <ul class="text-[#365413]  text-sm space-y-2 mb-6">
                        <li>🥕 14 repas par semaine</li>
                        <li>🥕 Mise en relation avec coach nutritionnel</li>
                        <li>🥕 Accès recettes adaptées à la continuité de votre régime</li>
                    </ul>

                    <a href="{{ url('/demo-subscribe3') }}" class="w-full bg-[#F37021] text-white font-bold py-2 hover:bg-[#d75a00] transition text-center inline-block">
                        Choisir
                    </a>
                </div>
            </div>

        </section>

    </div>
    
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

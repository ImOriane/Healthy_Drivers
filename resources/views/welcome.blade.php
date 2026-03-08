<x-app-layout>

    <div class="relative flex flex-col items-center justify-center min-h-screen pt-16 bg-fond">

        <section class="pt-32 pb-40 w-full bg-[#A7D74D] relative overflow-hidden">


            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between max-w-6xl mx-auto px-6">
                <div class="max-w-xl text-white">
                    <h1 class="text-4xl font-extrabold mb-6">
                        Mangez mieux sans effort
                    </h1>
                    <p class="mb-6 leading-relaxed">
                        Des repas équilibrés et savoureux, adaptés à vos goûts et besoins.
                        Produits sélectionnés avec soin, suivi possible par un coach nutritionniste
                        en ligne, et livraison chez vous avec formules d’abonnement flexibles.
                        Votre bien-être est notre mission.
                    </p>
                    <a href="#"
                       class="bg-orange-500 text-white px-6 py-3 font-semibold rounded shadow hover:bg-orange-600">
                        S’abonner
                    </a>
                </div>
            </div>

            <img src="{{ asset('images/assiettes.png') }}"
                 class="absolute bottom-0 right-0 w-[520px] z-10">

        </section>

        <div class="w-full h-[300px] bg-[#EFE0D2] relative z-20"></div>

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

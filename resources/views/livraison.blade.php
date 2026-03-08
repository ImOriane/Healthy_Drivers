<x-app-layout>
    <section class="w-full bg-[#E67E22] pt-16 pb-12 mt-16">
        <div class="max-w-7xl mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-bold text-white uppercase">Livraison</h1>
        </div>
    </section>

    <section class="bg-[#f5f0e6] min-h-screen py-36 px-6 md:px-16 font-sans">


        <div class="max-w-5xl mx-auto mb-20">
            <h2 class="text-3xl md:text-4xl font-extrabold text-[#2e2e2e] leading-tight max-w-2xl mb-6">
                La livraison chez <span class="text-primary">Healthy Drivers</span>
            </h2>
            <p class="text-sm text-[#555] leading-relaxed max-w-xl mb-4">
                Chez Healthy Drivers, la qualité ne s'arrête pas à nos plats : elle se prolonge jusque dans la livraison.
            </p>
            <p class="text-sm text-[#555] leading-relaxed max-w-xl">
                Grâce à notre modèle d'abonnement, nous nous engageons à vous offrir
                <span class="text-[#c0622a] font-semibold">un service régulier, fiable et respectueux</span>
                des exigences liées à une alimentation saine.
            </p>
        </div>


        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center mb-20">
            <div class="rounded-2xl overflow-hidden shadow-md h-56 order-last md:order-first">
                <img src="https://images.unsplash.com/photo-1530521954074-e64f6810b32d?w=800&q=80"
                     alt="Livraison" class="w-full h-full object-cover"/>
            </div>
            <div>
                <h2 class="text-xl font-bold text-[#2e2e2e] mb-3">Nos engagements de livraison</h2>
                <p class="text-sm text-[#555] leading-relaxed mb-3">
                    Nos plats sont acheminés via transport frigorifique
                    <span class="text-[#c0622a] font-semibold">respectant la chaîne du froid.</span>
                </p>
                <p class="text-sm text-[#555] leading-relaxed mb-3">
                    Tous nos plats sont acheminés dans
                    <span class="text-primary font-semibold">des camions frigorifiques</span>
                    équipés pour garantir le maintien optimal de la température.
                </p>
                <p class="text-sm text-[#555] leading-relaxed">
                    Ainsi, la fraîcheur et les qualités nutritionnelles de nos repas sont parfaitement préservées jusqu'à votre porte.
                </p>
            </div>
        </div>


        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center mb-20">
            <div>
                <h2 class="text-xl font-bold text-[#2e2e2e] mb-3">Les modes de livraison</h2>
                <p class="text-sm text-[#555] leading-relaxed mb-4">
                    Livraison à <span class="text-[#c0622a] font-semibold">domicile ou au bureau</span> : recevez vos repas directement à l'endroit qui vous convient le mieux.
                </p>
                <p class="text-sm text-[#555] leading-relaxed">
                    Créneaux horaires précis : choisissez la plage horaire qui correspond à
                    <span class="text-primary font-semibold underline">votre emploi du temps</span>
                    pour être sûr de profiter de votre repas juste après réception.
                </p>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-md h-56">
                <img src="https://images.unsplash.com/photo-1601598851547-4302969d0614?w=800&q=80"
                     alt="Modes de livraison" class="w-full h-full object-cover"/>
            </div>
        </div>


        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div class="rounded-2xl overflow-hidden shadow-md h-56 order-last md:order-first">
                <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&q=80"
                     alt="Commande en ligne" class="w-full h-full object-cover"/>
            </div>
            <div>
                <h2 class="text-xl font-bold text-[#2e2e2e] mb-3">Simple à commander, rapide à recevoir</h2>
                <p class="text-sm text-[#555] leading-relaxed">
                    Gérez vos livraisons directement depuis votre espace personnel.
                    <span class="text-primary font-semibold">Modifiez, suspendez ou reprogrammez</span>
                    vos créneaux en quelques clics, selon vos disponibilités du moment.
                </p>
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

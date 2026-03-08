<x-app-layout>
    <section class="w-full bg-[#E67E22] pt-16 pb-12 mt-16">
        <div class="max-w-7xl mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-bold text-white uppercase">Notre Concept</h1>
        </div>
    </section>
    <section class="bg-[#f5f0e6] min-h-screen py-36 px-6 md:px-16 font-sans">

        <div class="max-w-5xl mx-auto mb-20">
            <h1 class="text-3xl md:text-4xl font-extrabold text-[#2e2e2e] leading-tight max-w-2xl mb-6">
                Chez healthy Drivers, notre mission est simple : vous aider à bien manger,
                <span class="text-primary ">chaque jour</span>, sans stress ni compromis.
            </h1>
        </div>

        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center mb-20">
            <div>
                <h2 class="text-xl font-bold text-[#2e2e2e] mb-3">Des repas sains, savoureux et adaptés à vous</h2>
                <p class="text-sm text-[#555] leading-relaxed">
                    Fini les prises de tête devant le frigo ou les plats ultra-transformés. Nous vous livrons des repas
                    faits maison, équilibrés, gourmands et surtout pensés
                    <span class="text-[#c0622a] font-semibold">pour vous</span>.
                    Grâce à un formulaire complet, nous définissons ensemble un
                    <span class="text-[#c0622a] font-semibold">menu personnalisé</span>
                    qui s'adapte à vos goûts, à vos objectifs et à votre rythme de vie.
                </p>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-md h-56">
                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=800&q=80"
                     alt="Repas sain" class="w-full h-full object-cover"/>
            </div>
        </div>

        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center mb-20">
            <div class="rounded-2xl overflow-hidden shadow-md h-56 order-last md:order-first">
                <img src="https://images.unsplash.com/photo-1547592180-85f173990554?w=800&q=80"
                     alt="Objectifs nutrition" class="w-full h-full object-cover"/>
            </div>
            <div>
                <h2 class="text-xl font-bold text-[#2e2e2e] mb-3">Vos objectifs, notre priorité</h2>
                <p class="text-sm text-[#555] leading-relaxed">
                    Perte de poids, prise de masse, équilibre alimentaire, gain de temps… Quel que soit votre objectif,
                    notre équipe vous accompagne avec un suivi nutritionnel continu et une offre flexible.
                    <span class="text-primary font-semibold">Nos abonnements s'adaptent</span>
                    à votre mode de vie, avec plus ou moins de livraisons par semaine et
                    <span class="text-primary font-semibold">des recettes simples à réaliser</span>
                    pour les jours sans livraison selon votre abonnement.
                </p>
            </div>
        </div>

        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center mb-20">
            <div>
                <h2 class="text-xl font-bold text-[#2e2e2e] mb-3">Un accompagnement nutritionnel personnalisé</h2>
                <p class="text-sm text-[#555] leading-relaxed">
                    Vous n'êtes jamais seul·e :
                    <span class="text-primary font-semibold">nos coach-es nutritionnistes</span>
                    sont disponibles en ligne pour vous guider, répondre à vos questions, ajuster vos menus et vous
                    encourager. Un vrai partenaire santé à portée de clic.
                </p>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-md h-56">
                <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=800&q=80"
                     alt="Accompagnement nutritionnel" class="w-full h-full object-cover"/>
            </div>
        </div>

        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div class="rounded-2xl overflow-hidden shadow-md h-56 order-last md:order-first">
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=800&q=80"
                     alt="Plaisir de manger" class="w-full h-full object-cover"/>
            </div>
            <div>
                <h2 class="text-xl font-bold text-[#2e2e2e] mb-3">Le plaisir de manger avant tout</h2>
                <p class="text-sm text-[#555] leading-relaxed">
                    Manger sain ne doit jamais être une contrainte. Nos plats sont conçus pour être
                    <strong class="text-[#c0622a] ">à la fois nutritifs et délicieux</strong>,
                    afin que chaque repas reste un moment de plaisir.
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

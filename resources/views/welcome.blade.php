<x-app-layout>
    <div id="cookie-banner" class="fixed bottom-4 right-4 bg-[#E67E22] text-white p-4 rounded-lg shadow-lg max-w-sm z-50 flex flex-col gap-4">
        <p class="text-sm">
            Ce site utilise des cookies pour améliorer votre expérience.
            <a href="{{ url('/reglementation') }}" class="underline font-bold text-white hover:text-gray-200">Consulter notre politque des cookies</a>
        </p>
        <div class="flex gap-2 justify-end">
            <button onclick="acceptCookies()" class="bg-white text-[#E67E22] px-3 py-1 rounded font-bold hover:bg-gray-100 transition">Accepter</button>
            <button onclick="declineCookies()" class="bg-gray-200 text-[#E67E22] px-3 py-1 rounded font-bold hover:bg-gray-300 transition">Refuser</button>
        </div>
    </div>

    <script>
        function acceptCookies() {
            document.getElementById('cookie-banner').remove();
            document.cookie = "demo_lore_cookie=accepted; path=/; max-age=31536000"; // 1 an
        }

        function declineCookies() {
            document.getElementById('cookie-banner').remove();
            document.cookie = "demo_lore_cookie=declined; path=/; max-age=31536000";
        }
    </script>
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

</x-app-layout>

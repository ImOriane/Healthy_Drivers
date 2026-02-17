<x-app-layout>

    <div class="relative flex flex-col items-center justify-center min-h-screen pt-16 bg-fond">


        <section class="pt-32 pb-40 w-full bg-[#A7D74D] relative overflow-hidden">

            <div class="absolute inset-0 bg-[url('/images/carotte.png')] bg-repeat opacity-70"></div>

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


                <div class="relative">
                    <img src="{{ asset("images/asiette.png") }}"
                         class="w-[520px] absolute -bottom-20 right-0 md:right-[-50px] z-0">
                </div>

            </div>

        </section>

        <!-- Section beige qui masque l’assiette -->
        <div class="w-full h-[300px] bg-[#EFE0D2] relative z-20"></div>

    </div>

</x-app-layout>

<h3 class="text-lg font-semibold text-gray-700 text-center mb-4 flex justify-center">Abonnement actuel</h3>

@if(auth()->user()->is_subscribed && auth()->user()->abonnement)
    <div class="">
        <div class="p-6 bg-[#F0F5EE] border border-gray-200 rounded-lg w-full max-w-sm text-center shadow">
            <span class="font-bold text-gray-800 block text-lg">{{ ucfirst(auth()->user()->abonnement) }}</span>

            <form method="POST" action="{{ url('/demo-desabo') }}" class="mt-4">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 text-sm">
                    Désactiver
                </button>
            </form>
        </div>
    </div>
@else
    <div class="flex justify-center">
        <div class="text-center space-y-3">
            <p class="text-gray-600">Vous n’avez aucun abonnement actif.</p>
            <a href="{{ url('/abonnements') }}" class="inline-block bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                S'abonner ?
            </a>
        </div>
    </div>
@endif

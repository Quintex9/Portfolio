<section id="projects" class="container-box">
    <h2 class="section-title">Projekty</h2>

    <div class="grid md:grid-cols-3 gap-6">
        {{-- Projekt 1: E-Drogeria --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
            <img src="{{ asset('images/Drogeria.png') }}" alt="E-Drogeria" class="w-full h-100 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">E-Drogeria (Vue.js)</h3>
                <p class="text-sm text-gray-700 mb-4">
                    Jednoduchý e-shop pre drogériu s použitím Vue.js, zameraný na dynamickú správu produktov a nákupný košík.
                </p>
                <a href="https://github.com/Quintex9/Drogeria-Shop" target="_blank" class="text-purple-600 font-medium hover:underline">Zobraziť projekt</a>
            </div>
        </div>

        {{-- Projekt 2: Obchod s hudobným drevom --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
            <img src="{{ asset('images/resonance.png') }}" alt="Rezonančné Drevo" class="w-full h-100 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Obchod s hudobným drevom (PHP)</h3>
                <p class="text-sm text-gray-700 mb-4">
                    Webová aplikácia pre predaj rezonančného dreva pre hudobné nástroje, vytvorená v čistom PHP s databázou.
                </p>
                <a href="https://github.com/Quintex9/ResonanceWood" target="_blank" class="text-purple-600 font-medium hover:underline">Zobraziť projekt</a>
            </div>
        </div>

        {{-- Projekt 3: Highway Havoc --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
            <img src="{{ asset('images/crossy.png') }}" alt="Highway Havoc" class="w-full h-100 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Highway Havoc (Pygame)</h3>
                <p class="text-sm text-gray-700 mb-4">
                    2D hra podobná Crossy Road, naprogramovaná v Pygame. Hráč prechádza cestu a vyhýba sa autám.
                </p>
                <a href="https://github.com/Quintex9/Game" target="_blank" class="text-purple-600 font-medium hover:underline">Zobraziť projekt</a>
            </div>
        </div>
    </div>
</section>

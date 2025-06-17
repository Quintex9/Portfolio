<section id="about" class="container-box bg-white rounded-xl shadow-md">
    <h2 class="text-4xl font-bold text-center mb-2">ABOUT ME</h2>
    <div class="w-20 h-1 bg-purple-500 mx-auto mb-6 rounded-full"></div>

    <p class="text-center max-w-2xl mx-auto text-gray-600 mb-10">
        Tu nájdeš viac informácií o mne, čo robím a aké mám aktuálne zručnosti v oblasti programovania a technológií.
    </p>

    <div class="grid md:grid-cols-2 gap-12">
        {{-- Ľavá strana: Text --}}
        <div>
            <h3 class="text-2xl font-semibold mb-4">Spoznaj ma!</h3>
<p class="mb-4 text-gray-700">
    Študujem na <strong>Univerzite Konštantína Filozofa v Nitre</strong>, konkrétne na <strong>Fakulte prírodných vied a informatiky</strong>, kde sa venujem informatike a vývoju softvéru.
</p>

<p class="mb-4 text-gray-700">
    Počas štúdia som sa venoval viacerým projektom, ktoré rozvíjali moje technické zručnosti. Pracoval som na e-shope <strong>E-Drogeria</strong> pomocou <strong>Vue.js</strong>, vytvoril som webový obchod s hudobným drevom v <strong>PHP</strong>, a naprogramoval som hru <strong>Highway Havoc</strong> v <strong>Pygame</strong>, inšpirovanú hrou Crossy Road.
</p>

<p class="mb-6 text-gray-700">
    Hľadám nové výzvy, kde môžem rásť a prispieť svojimi schopnosťami.
</p>

            <a href="#contact" class="bg-purple-600 text-white px-6 py-3 rounded-lg shadow hover:bg-purple-700 transition">
                KONTAKTUJ MA
            </a>
        </div>

        {{-- Pravá strana: Zručnosti --}}
        <div>
            <h3 class="text-2xl font-semibold mb-4">Moje zručnosti</h3>
            <div class="flex flex-wrap gap-3">
                @foreach (['HTML', 'CSS', 'PHP', 'Laravel', 'Tailwind', 'MySQL', 'Git', 'GitHub', 'Python', 'Java', 'Vue'] as $skill)
                    <span class="bg-gray-200 text-gray-800 px-4 py-2 rounded-full text-sm font-medium shadow-sm">
                        {{ $skill }}
                    </span>
                @endforeach
            </div>
        </div>
    </div>
</section>

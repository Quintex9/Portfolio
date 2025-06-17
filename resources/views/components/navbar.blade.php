<nav class="bg-white shadow p-4">
    <div class="container mx-auto flex justify-between items-center">
        {{-- Profilová fotka + meno --}}
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/496513884_734849822344049_3310283414478716129_n.jpg') }}"
                 alt="Michal Smatana" class="w-10 h-10 rounded-full object-cover border border-gray-300">
            <h1 class="text-xl font-bold">Michal Smatana</h1>
        </div>

        {{-- Navigácia --}}
        <ul class="flex gap-6 text-sm font-medium">
            <li><a href="#about" class="navbar-link">O mne</a></li>
            <li><a href="#projects" class="navbar-link">Projekty</a></li>
            <li><a href="#contact" class="navbar-link">Kontakt</a></li>
            <li><a href="#cv" class="navbar-link">CV</a></li>
        </ul>
    </div>
</nav>

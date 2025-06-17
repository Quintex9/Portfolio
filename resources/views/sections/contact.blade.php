<section id="contact" class="my-12 bg-gray-50 rounded-xl">
    <div class="container mx-auto px-4 max-w-2xl">
        <h2 class="text-3xl font-semibold mb-6">Kontakt</h2>

        <form method="POST" action="#" class="space-y-4">
            @csrf
            <input type="text" name="name" placeholder="Tvoje meno" class="form-input" required>
            <input type="email" name="email" placeholder="Email" class="form-input" required>
            <textarea name="message" rows="5" placeholder="Správa" class="form-input" required></textarea>
            <button type="submit" class="btn-primary">Odoslať</button>
        </form>
    </div>
</section>

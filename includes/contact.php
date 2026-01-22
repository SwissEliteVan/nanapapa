 <!-- Contact -->
    <section id="contact" class="py-20 bg-brand-purple text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto flex flex-col lg:flex-row gap-12">
                <div class="lg:w-1/2">
                    <h2 class="text-3xl font-title font-bold mb-6">Contactez-moi</h2>
                    <p class="mb-8 opacity-90">Vérifions ensemble mes disponibilités pour vos dates.</p>
                    <div class="space-y-4">
                        <a href="#" class="flex items-center hover:text-brand-pink transition email-protect"><i class="fas fa-envelope w-8"></i> Contact</a>
                        <a href="tel:+41787685047" class="flex items-center hover:text-brand-pink transition"><i class="fas fa-phone w-8"></i> +41 78 768 50 47</a>
                        <div class="flex items-center"><i class="fas fa-map-marker-alt w-8"></i> Saint-Saphorin-sur-Morges</div>
                    </div>
                </div>
                <form id="contactForm" class="lg:w-1/2 bg-white p-6 md:p-8 rounded-3xl text-gray-700 shadow-2xl">
                    <div class="space-y-4">
                        <input type="text" id="contactNom" name="nom" placeholder="Nom & Prénom" class="w-full p-3 bg-gray-50 rounded-xl border-none focus:ring-2 focus:ring-brand-purple outline-none" required>
                        <input type="email" id="contactEmail" name="email" placeholder="Email" class="w-full p-3 bg-gray-50 rounded-xl border-none focus:ring-2 focus:ring-brand-purple outline-none" required>
                        <input type="text" id="contactVille" name="ville" placeholder="Ville" class="w-full p-3 bg-gray-50 rounded-xl border-none focus:ring-2 focus:ring-brand-purple" required>
                        <div class="flex gap-2">
                            <input type="text" id="contactDates" name="dates" placeholder="Dates" class="w-1/2 p-3 bg-gray-50 rounded-xl border-none focus:ring-2 focus:ring-brand-purple">
                            <select id="contactChats" name="chats" class="w-1/2 p-3 bg-gray-50 rounded-xl border-none focus:ring-2 focus:ring-brand-purple text-gray-500">
                                <option>1 chat</option><option>2 chats</option><option>3+ chats</option>
                            </select>
                        </div>
                        <textarea name="message" id="message" rows="3" placeholder="Message..." class="w-full p-3 bg-gray-50 rounded-xl border-none focus:ring-2 focus:ring-brand-purple" required></textarea>
                        <button type="submit" class="w-full bg-brand-purple text-white font-bold py-3 rounded-xl hover:bg-brand-purple-dark transition">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

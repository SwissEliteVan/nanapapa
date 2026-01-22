    <!-- Message offline (Service Worker) -->
    <div class="offline-message" id="offlineMessage">
        <i class="fas fa-wifi mr-2"></i>Vous êtes hors ligne. Certaines fonctionnalités peuvent être limitées.
    </div>

  <div id="commercial-popup" class="overlay p-4">
        <div class="bg-white dark:bg-gray-800 rounded-3xl p-10 max-w-md w-full relative shadow-2xl text-center">
            <button onclick="closePopup('commercial-popup')" class="absolute top-4 right-4 text-gray-400 hover:text-brand-purple transition text-2xl">
                <i class="fas fa-times"></i>
            </button>
            <div class="w-20 h-20 bg-brand-purple text-white rounded-full flex items-center justify-center mx-auto mb-8 shadow-lg">
                <i class="fas fa-percent text-3xl"></i>
            </div>
            <h3 class="text-3xl font-bold mb-4 font-title">Offre Fidélité</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-8 leading-relaxed">Réservez 10 visites consécutives et nous vous offrons la 11ème ainsi que la pré-visite.</p>
            <a href="#contact" onclick="closePopup('commercial-popup')" class="block w-full bg-brand-purple text-white py-5 rounded-2xl font-bold hover:bg-brand-purple-dark transition-all transform hover:scale-105">En profiter maintenant</a>
        </div>
    </div>
  <div class="modal-content relative w-full overflow-hidden rounded-2xl border border-white/20 bg-white shadow-2xl"
       style="max-width:420px; max-height:80vh;">
       
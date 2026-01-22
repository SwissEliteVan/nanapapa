<!-- Navigation -->
    <nav class="bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <a href="#" class="flex items-center">
                <img src="assets/img/logo-natpatoune.jpg" alt="Nat'Patoune" class="h-12 md:h-16 w-auto" width="100" height="64" loading="eager">
            </a>
            
            <div class="hidden md:flex items-center space-x-6 font-title text-sm font-bold text-gray-600">
                <a href="#accueil" class="hover:text-brand-purple transition">Accueil</a>
                
                <div class="relative group">
                    <button class="flex items-center hover:text-brand-purple transition py-4">
                        Mes Services <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="absolute top-full left-0 w-48 pt-2 hidden group-hover:block">
                        <div class="bg-white border border-gray-100 rounded-xl shadow-lg overflow-hidden">
                            <a href="#services" class="block px-4 py-3 hover:bg-gray-50 hover:text-brand-purple transition border-b border-gray-50">Les Services</a>
                            <a href="#cadeau" class="block px-4 py-3 hover:bg-gray-50 hover:text-brand-purple transition text-brand-pink"><i class="fas fa-gift mr-2"></i> Bon Cadeau</a>
                        </div>
                    </div>
                </div>

                <a href="#zones-tarifs" class="hover:text-brand-purple transition">Zones & Tarifs</a>
                <a href="#cadeau" class="hover:text-brand-purple transition text-brand-pink">Cadeau</a>

                <div class="relative group">
                    <button class="flex items-center hover:text-brand-purple transition py-4">
                        L'Univers <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="absolute top-full left-0 w-48 pt-2 hidden group-hover:block">
                        <div class="bg-white border border-gray-100 rounded-xl shadow-lg overflow-hidden">
                            <a href="#propos" class="block px-4 py-3 hover:bg-gray-50 hover:text-brand-purple transition border-b border-gray-50">Qui suis-je</a>
                            <a href="#galerie" class="block px-4 py-3 hover:bg-gray-50 hover:text-brand-purple transition border-b border-gray-50">Galerie Photos</a>
                            <a href="#avis" class="block px-4 py-3 hover:bg-gray-50 hover:text-brand-purple transition border-b border-gray-50">Avis Clients</a>
                            <a href="#blog" class="block px-4 py-3 hover:bg-gray-50 hover:text-brand-purple transition">Le Blog</a>
                        </div>
                    </div>
                </div>

                <a href="#contact" class="bg-brand-purple text-white px-5 py-2.5 rounded-full hover:bg-brand-purple-dark transition shadow-md">Réserver</a>
            </div>
            
            <button id="mobile-menu-btn" class="md:hidden text-brand-text p-2 focus:outline-none" aria-label="Menu"><i class="fas fa-bars text-2xl"></i></button>
        </div>
        
        <div id="mobile-menu" class="hidden bg-white border-t p-4 shadow-lg absolute w-full top-full left-0 z-40 flex-col space-y-2 text-center font-medium text-gray-700 max-h-[80vh] overflow-y-auto">
            <a href="#accueil" class="py-2 block hover:bg-gray-50 rounded">Accueil</a>
            
            <div class="py-2 border-t border-gray-100">
                <p class="text-xs text-gray-400 uppercase font-bold mb-2">Prestations</p>
                <a href="#services" class="py-2 block hover:bg-gray-50 rounded">Services</a>
                <a href="#zones-tarifs" class="py-2 block hover:bg-gray-50 rounded">Zones & Tarifs</a>
                <a href="#cadeau" class="py-2 block hover:bg-gray-50 rounded text-brand-pink font-bold">Bon Cadeau</a>
            </div>

            <div class="py-2 border-t border-gray-100">
                <p class="text-xs text-gray-400 uppercase font-bold mb-2">Découvrir</p>
                <a href="#propos" class="py-2 block hover:bg-gray-50 rounded">Qui suis-je</a>
                <a href="#galerie" class="py-2 block hover:bg-gray-50 rounded">Galerie</a>
                <a href="#avis" class="py-2 block hover:bg-gray-50 rounded">Avis</a>
                <a href="#blog" class="py-2 block hover:bg-gray-50 rounded">Blog</a>
            </div>

            <a href="#contact" class="bg-brand-purple text-white py-3 rounded-xl block shadow-md mt-4">Réserver</a>
        </div>
    </nav>

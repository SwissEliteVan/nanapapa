<!-- Script JavaScript optimisé -->
    <script>
        // Initialisation optimisée
        (function() {
            // Déférer l'exécution
            const defer = (fn) => {
                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', fn);
                } else {
                    fn();
                }
            };
            
            // Marquer le body comme chargé
            defer(() => {
                setTimeout(() => {
                    document.body.classList.add('loaded');
                }, 100);
                
                // Bannière cookies différée
                setTimeout(initCookieBanner, 2000);
                
                // Vérifier la connexion
                checkConnection();
            });
        })();

        // Vérification de connexion
        function checkConnection() {
            const offlineMessage = document.getElementById('offlineMessage');
            if (!navigator.onLine) {
                offlineMessage.style.display = 'block';
            }
            window.addEventListener('online', () => {
                offlineMessage.style.display = 'none';
            });
            window.addEventListener('offline', () => {
                offlineMessage.style.display = 'block';
            });
        }

        // Obfuscation email
        document.addEventListener('DOMContentLoaded', () => {
            const user = 'miaou';
            const domain = 'nat-patoune.ch';
            const links = document.querySelectorAll('.email-protect');
            
            links.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    window.location.href = `mailto:${user}@${domain}`;
                });
            });
        });

        // Gestion des modales
        function openModal(id) {
            const m = document.getElementById(id);
            if(m) {
                m.classList.add('open');
                document.body.style.overflow = 'hidden';
            }
        }
        function closeModal(id) {
            const m = document.getElementById(id);
            if(m) {
                m.classList.remove('open');
                document.body.style.overflow = '';
            }
        }
        
        // Modal promo différée
        window.addEventListener('load', () => {
            if (!sessionStorage.getItem('promoClosed')) {
                setTimeout(() => openModal('modal-promo'), 5000);
            }
        });
        
        const promoCloseBtn = document.querySelector('#modal-promo .modal-bg');
        if(promoCloseBtn) {
            promoCloseBtn.addEventListener('click', () => sessionStorage.setItem('promoClosed', 'true'));
        }

        // Menu mobile
        const menuBtn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        if(menuBtn) {
            menuBtn.addEventListener('click', () => menu.classList.toggle('hidden'));
            menu.querySelectorAll('a').forEach(l => l.addEventListener('click', () => menu.classList.add('hidden')));
        }

        // Formulaire contact optimisé
        const contactForm = document.getElementById('contactForm');
        if(contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault(); 
                
                if (!this.checkValidity()) {
                    this.reportValidity();
                    return;
                }
                
                const nom = document.getElementById('contactNom').value;
                const email = document.getElementById('contactEmail').value;
                const ville = document.getElementById('contactVille').value;
                const dates = document.getElementById('contactDates').value;
                const chats = document.getElementById('contactChats').value;
                const msg = document.getElementById('message').value;

                const user = 'miaou';
                const domain = 'nat-patoune.ch';
                const subject = encodeURIComponent(`Demande de garde - ${nom}`);
                const body = encodeURIComponent(`Bonjour Nathalie,

Je souhaite réserver une garde.

- Nom : ${nom}
- Ville : ${ville}
- Dates : ${dates}
- Nombre de chats : ${chats}
- Email : ${email}

Message :
"${msg}"

Merci !`);
                
                window.location.href = `mailto:${user}@${domain}?subject=${subject}&body=${body}`;
            });
        }

        // Formulaire cadeau
        const giftForm = document.getElementById('giftForm');
        if(giftForm) {
            giftForm.addEventListener('submit', function(e) {
                e.preventDefault(); 
                
                if (!this.checkValidity()) {
                    this.reportValidity();
                    return;
                }
                
                const from = document.getElementById('giftFrom').value;
                const to = document.getElementById('giftTo').value;
                const amountRadio = document.querySelector('input[name="amount"]:checked');
                const amount = amountRadio ? amountRadio.value : 'Non spécifié';
                const msg = document.getElementById('giftMessage').value;
                const email = document.getElementById('giftEmail').value;

                const user = 'miaou';
                const domain = 'nat-patoune.ch';
                const subject = encodeURIComponent(`Commande Bon Cadeau Nat'Patoune - ${from}`);
                const body = encodeURIComponent(`Bonjour Nathalie,

Je souhaite commander un bon cadeau.

- De la part de : ${from}
- Pour : ${to}
- Montant : ${amount} CHF
- Email de réception : ${email}

Message sur la carte :
"${msg}"

Je procède au paiement TWINT/Bancaire de ce pas.
Merci !`);
                
                window.location.href = `mailto:${user}@${domain}?subject=${subject}&body=${body}`;

                giftForm.classList.add('hidden');
                const successDiv = document.getElementById('giftSuccess');
                const confName = document.getElementById('confName');
                if(confName) confName.innerText = from;
                if(successDiv) successDiv.classList.remove('hidden');
                
                const modalContent = document.querySelector('#modal-cadeau .modal-content');
                if(modalContent) modalContent.scrollTop = 0;
            });
        }

        // Back to top avec throttle
        let scrollTimeout;
        window.addEventListener('scroll', () => {
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(() => {
                const b = document.getElementById('backToTopBtn');
                if (window.scrollY > 300) b.classList.add('show'); 
                else b.classList.remove('show');
            }, 50);
        });
        
        // Pré-remplissage contact
        function prefillContact(z) { 
            const msg = document.getElementById('message');
            if(msg) msg.value = `Bonjour, je suis intéressé(e) par la ${z} pour mes chats...`; 
        }
        
        // Gestion cookies
        function initCookieBanner() {
            const consent = localStorage.getItem('cookieConsent');
            const banner = document.getElementById('cookie-banner');
            if (!consent && banner) {
                setTimeout(() => { banner.classList.add('visible'); }, 2000);
            }
        }

        function acceptCookies() {
            localStorage.setItem('cookieConsent', 'true');
            hideCookieBanner();
        }

        function refuseCookies() {
            localStorage.setItem('cookieConsent', 'false');
            hideCookieBanner();
        }

        function hideCookieBanner() {
            const banner = document.getElementById('cookie-banner');
            if(banner) banner.classList.remove('visible');
        }

        // Service Worker inline
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                // Enregistrement du Service Worker inline
                const swScript = `
                    const CACHE_NAME = 'natpatoune-v1.2';
                    const urlsToCache = [
                        '/',
                        '/index.html',
                        '/assets/img/logo-natpatoune.jpg',
                        '/assets/img/hero.mp4',
                        '/assets/img/favicon-natpatoune-chat.png'
                    ];

                    self.addEventListener('install', event => {
                        event.waitUntil(
                            caches.open(CACHE_NAME)
                                .then(cache => cache.addAll(urlsToCache))
                                .then(() => self.skipWaiting())
                        );
                    });

                    self.addEventListener('activate', event => {
                        event.waitUntil(
                            caches.keys().then(cacheNames => {
                                return Promise.all(
                                    cacheNames.map(cache => {
                                        if (cache !== CACHE_NAME) {
                                            return caches.delete(cache);
                                        }
                                    })
                                );
                            }).then(() => self.clients.claim())
                        );
                    });

                    self.addEventListener('fetch', event => {
                        if (event.request.method !== 'GET') return;
                        
                        event.respondWith(
                            caches.match(event.request)
                                .then(response => {
                                    if (response) {
                                        return response;
                                    }
                                    
                                    return fetch(event.request).then(response => {
                                        if (!response || response.status !== 200 || response.type !== 'basic') {
                                            return response;
                                        }
                                        
                                        const responseToCache = response.clone();
                                        caches.open(CACHE_NAME)
                                            .then(cache => {
                                                cache.put(event.request, responseToCache);
                                            });
                                            
                                        return response;
                                    }).catch(() => {
                                        if (event.request.headers.get('accept').includes('text/html')) {
                                            return caches.match('/');
                                        }
                                    })
                                })
                        );
                    });
                `;
                
                const blob = new Blob([swScript], { type: 'application/javascript' });
                const swURL = URL.createObjectURL(blob);
                
                navigator.serviceWorker.register(swURL)
                    .then(registration => console.log('SW registered:', registration))
                    .catch(error => console.log('SW registration failed:', error));
            });
        }
    </script>
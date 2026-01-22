<!-- Modal Cadeau -->
<div id="modal-cadeau" class="modal">
    <div class="modal-bg" onclick="closeModal('modal-cadeau')"></div>
    <div class="modal-content w-full max-w-lg bg-white overflow-hidden">
        <div class="bg-brand-purple p-6 text-white flex justify-between items-center shrink-0">
            <div>
                <h3 class="font-title font-bold text-xl"><i class="fas fa-gift mr-2 text-brand-pink"></i> Créer votre Bon Cadeau</h3>
                <p class="text-xs text-white/80 mt-1">Étape 1/2 : Personnalisation</p>
            </div>
            <button onclick="closeModal('modal-cadeau')" class="text-white/80 hover:text-white"><i class="fas fa-times text-xl"></i></button>
        </div>
        <div class="modal-body p-6 md:p-8">
            <form id="giftForm" class="space-y-5">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-3">Montant du bon</label>
                    <div class="grid grid-cols-3 gap-3">
                        <label class="cursor-pointer">
                            <input type="radio" name="amount" value="50" class="peer sr-only" required>
                            <div class="border-2 border-gray-200 peer-checked:border-brand-purple peer-checked:bg-brand-purple/5 peer-checked:text-brand-purple rounded-xl p-3 text-center transition font-bold">50.-</div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="amount" value="100" class="peer sr-only">
                            <div class="border-2 border-gray-200 peer-checked:border-brand-purple peer-checked:bg-brand-purple/5 peer-checked:text-brand-purple rounded-xl p-3 text-center transition font-bold">100.-</div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="amount" value="Autre" class="peer sr-only">
                            <div class="border-2 border-gray-200 peer-checked:border-brand-purple peer-checked:bg-brand-purple/5 peer-checked:text-brand-purple rounded-xl p-3 text-center transition font-bold">Autre</div>
                        </label>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-500 mb-1 uppercase">De la part de</label>
                        <input type="text" id="giftFrom" placeholder="Votre nom" class="w-full p-3 bg-gray-50 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-1 focus:ring-brand-purple outline-none" required>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 mb-1 uppercase">Pour (Bénéficiaire)</label>
                        <input type="text" id="giftTo" placeholder="Nom du bénéficiaire" class="w-full p-3 bg-gray-50 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-1 focus:ring-brand-purple outline-none" required>
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-500 mb-1 uppercase">Votre message personnel</label>
                    <textarea id="giftMessage" rows="2" placeholder="Joyeux anniversaire ! Pour prendre soin de Minou..." class="w-full p-3 bg-gray-50 rounded-xl border border-gray-200 focus:border-brand-purple outline-none"></textarea>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-500 mb-1 uppercase">Votre Email (pour recevoir le bon)</label>
                    <input type="email" id="giftEmail" placeholder="email@exemple.ch" class="w-full p-3 bg-gray-50 rounded-xl border border-gray-200 focus:border-brand-purple outline-none" required>
                </div>
                <button type="submit" class="w-full bg-brand-purple text-white font-bold py-4 rounded-xl hover:bg-brand-purple-dark transition shadow-md flex items-center justify-center gap-2">
                    <span>Valider la commande</span> <i class="fas fa-arrow-right"></i>
                </button>
                <p class="text-xs text-center text-gray-400 mt-2"><i class="fas fa-lock mr-1"></i> Paiement sécurisé par TWINT ou Virement après validation.</p>
            </form>
            <div id="giftSuccess" class="hidden text-center py-4">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-check text-4xl text-green-500"></i>
                </div>
                <h3 class="text-2xl font-title font-bold text-brand-text mb-2">Commande enregistrée !</h3>
                <p class="text-gray-600 mb-6 text-sm">Merci <span id="confName" class="font-bold"></span>. Pour recevoir votre bon cadeau par email, veuillez procéder au règlement du montant choisi.</p>
                <div class="bg-gray-50 p-6 rounded-2xl border border-gray-200 mb-6 text-left">
                    <p class="font-bold text-brand-purple mb-4 text-sm uppercase tracking-wide">Options de paiement :</p>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="bg-white p-2 rounded-lg shadow-sm w-12 h-12 flex items-center justify-center"><i class="fas fa-qrcode text-2xl text-red-500"></i></div>
                        <div>
                            <p class="font-bold text-gray-800">TWINT</p>
                            <p class="text-sm text-gray-600 select-all">+41 78 768 50 47</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="bg-white p-2 rounded-lg shadow-sm w-12 h-12 flex items-center justify-center"><i class="fas fa-university text-2xl text-blue-500"></i></div>
                        <div>
                            <p class="font-bold text-gray-800">Virement Bancaire</p>
                            <p class="text-xs text-gray-500">IBAN envoyé par email ou SMS sur demande.</p>
                        </div>
                    </div>
                </div>
                <a href="#" onclick="window.location.reload()" class="text-brand-purple font-bold text-sm underline">Fermer et retourner au site</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal CGV -->
<div id="modal-cgv" class="modal">
    <div class="modal-bg" onclick="closeModal('modal-cgv')"></div>
    <div class="modal-content w-full max-w-4xl">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50 sticky top-0 z-10">
            <h3 class="font-bold text-brand-purple">Conditions Générales</h3>
            <button onclick="closeModal('modal-cgv')" class="text-gray-400" aria-label="Fermer"><i class="fas fa-times text-xl"></i></button>
        </div>
        <div class="modal-body text-gray-600 text-sm leading-relaxed">
            <p class="mb-4"><strong>Nat'Patoune - 2025</strong><br><strong>Conditions Générales de Nat'Patoune</strong><br>Garde de chats à Domicile</p>
            <p class="font-bold mb-2">1. Présentation de l'activité</p>
            <p class="mb-4">Nat'Patoune est une entreprise de gardiennage à domicile spécialisée dans le soin et la surveillance de chats au domicile de leur propriétaire.</p>
            <p class="mb-4">Durant l'absence du détenteur de l'animal, Nat'Patoune se déplace au domicile du client afin d'assurer le bien-être, la sécurité et les besoins courants de l'animal.</p>
            <p class="mb-2">Une prestation comprend généralement :</p>
            <ul class="list-disc pl-5 mb-4 space-y-1">
                <li>Une pré-visite au domicile du client afin de récolter toutes les informations nécessaires, établir le contrat et recevoir les clés ;</li>
                <li>Des visites à domicile selon la fréquence convenue ;</li>
                <li>La restitution des clés en fin de mandat.</li>
            </ul>
            <p class="font-bold mb-2">2. Pré-visite et remise des clés</p>
            <p class="mb-4">Une pré-visite à domicile est obligatoire avant le début de toute prestation. Elle permet un premier contact entre le client et Nat'Patoune, ainsi que la collecte de toutes les informations nécessaires au bon déroulement du gardiennage durant l'absence du propriétaire.</p>
            <p class="mb-2">Lors de cette pré-visite :</p>
            <ul class="list-disc pl-5 mb-4 space-y-1">
                <li>Un contrat de prestation est établi, lu, approuvé et signé par les deux parties après prise de connaissance des présentes conditions générales.</li>
                <li>Les clés du logement et tout autre moyen d'accès (badge, code, télécommande, etc.) sont remis à Nat'Patoune.</li>
                <li>La restitution des clés sera effectuée selon l'entente prévue dans le contrat.</li>
            </ul>
            <p class="mb-4">Cette pré-visite est payante, au tarif d'une visite de cat-sitting.</p>
            <p class="mb-4">Si les clés ne sont pas remises lors de la signature du contrat, le propriétaire s'engage à les fournir au minimum 24 heures avant son départ, à l'endroit sécurisé mentionné dans le contrat.</p>
            <p class="font-bold mb-2">3. Conditions de paiement</p>
            <p class="mb-2">Le règlement de la prestation doit être effectué au plus tard le premier jour du cat-sitting.</p>
            <p class="mb-2">Les modes de paiement acceptés par Nat'Patoune sont :</p>
            <ul class="list-disc pl-5 mb-4 space-y-1">
                <li>Cash,</li>
                <li>Virement bancaire,</li>
                <li>TWINT (uniquement pour les montants inférieurs ou égaux à 200.–, sauf accord contraire).</li>
            </ul>
            <p class="font-bold mb-2">4. Annulation, remboursement et fin anticipée</p>
            <p class="mb-4">Toute annulation de prestation doit être communiquée par écrit (email, SMS ou WhatsApp).</p>
            <p class="mb-2">Les indemnités suivantes s'appliquent :</p>
            <ul class="list-disc pl-5 mb-4 space-y-1">
                <li>Aucune indemnité si l'annulation a lieu au minimum 14 jours avant le début de la garde.</li>
                <li>Entre 7 et 13 jours avant le début de la garde : un forfait de CHF 50.– est dû.</li>
                <li>Moins de 7 jours avant le début de la garde : 25 % du montant total de la prestation est dû.</li>
            </ul>
            <p class="font-bold mb-2">5. Gestion des urgences et soins vétérinaires</p>
            <p class="mb-2">Le propriétaire s'engage à mettre à disposition de Nat'Patoune :</p>
            <ul class="list-disc pl-5 mb-4 space-y-1">
                <li>une caisse de transport en bon état,</li>
                <li>le carnet de vaccination (ou passeport de l'animal),</li>
                <li>les coordonnées du vétérinaire habituel.</li>
            </ul>
            <p class="mb-4">En cas d'urgence médicale, Nat'Patoune contacte en priorité le vétérinaire habituel. En son absence, son indisponibilité ou en dehors des heures d'ouverture, Nat'Patoune se rendra chez le vétérinaire de garde ou auprès du service d'urgence adéquat.</p>
            <p class="mb-4">Tous les frais médicaux, vétérinaires, pharmaceutiques ou annexes liés à l'urgence sont entièrement à la charge du propriétaire, qui s'engage à rembourser Nat'Patoune rapidement, sur présentation des justificatifs.</p>
            <p class="font-bold mb-2">6. Administration de soins médicaux</p>
            <p class="mb-4">Les soins médicaux administrés par Nat'Patoune le sont sous l'entière responsabilité du propriétaire.</p>
            <p class="mb-2">Le propriétaire doit fournir toutes les informations nécessaires et détaillées, notamment :</p>
            <ul class="list-disc pl-5 mb-4 space-y-1">
                <li>la quantité du traitement,</li>
                <li>la méthode d'administration,</li>
                <li>la fréquence,</li>
                <li>les horaires précis le cas échéant,</li>
                <li>ainsi que tout renseignement utile concernant l'état de santé de l'animal.</li>
            </ul>
            <p class="mb-4">Dans le cas de soins devant être administrés à heure fixe, un supplément de CHF 5.– par visite s'applique.</p>
            <p class="font-bold mb-2">7. Fournitures, alimentation et litière</p>
            <p class="mb-4">L'alimentation, la litière et les médicaments nécessaires sont entièrement à la charge du propriétaire, qui s'engage à en fournir une quantité suffisante pour toute la durée de la garde.</p>
            <p class="mb-4">En cas de manque de nourriture, de litière ou de médicaments, Nat'Patoune procédera à l'approvisionnement.</p>
            <p class="mb-2">Les frais suivants s'appliqueront :</p>
            <ul class="list-disc pl-5 mb-4 space-y-1">
                <li>un forfait de CHF 25.– pour le déplacement,</li>
                <li>le montant des achats effectués, facturé en supplément.</li>
            </ul>
            <p class="mb-4">Ces frais sont à régler à la fin de la prestation, sur présentation des justificatifs.</p>
            <p class="font-bold mb-2">8. Sécurité du domicile et fugue</p>
            <p class="mb-2">Avant son départ, le propriétaire s'engage à vérifier et sécuriser l'environnement du chat afin d'éliminer tout danger potentiel, tels que :</p>
            <ul class="list-disc pl-5 mb-4 space-y-1">
                <li>fenêtres laissées en imposte ou accessibles,</li>
                <li>balcons ou terrasses non sécurisés,</li>
                <li>cuvettes de WC ouvertes,</li>
                <li>fils, cordons, ficelles ou objets dangereux,</li>
                <li>plantes toxiques,</li>
                <li>ou tout autre risque non mentionné mais pouvant compromettre la sécurité de l'animal.</li>
            </ul>
            <p class="mb-4">Nat'Patoune décline toute responsabilité en cas d'incident lié à un environnement non sécurisé.</p>
            <p class="font-bold mb-2">9. Photos et vidéos</p>
            <p class="mb-4">Nat'Patoune peut, avec l'autorisation écrite du propriétaire (formulaire ou mention dans le contrat), prendre des photos ou vidéos de l'animal pour diffusion sur les supports suivants : site internet, Facebook, Instagram ou autres médias mentionnés dans le contrat.</p>
            <p class="mb-4">Le propriétaire peut refuser cette autorisation. Dans ce cas, seules des photos nécessaires seront prises pour être envoyées au propriétaire durant son absence.</p>
            <p class="font-bold mb-2">10. Modification des tarifs</p>
            <p class="mb-4">Nat'Patoune se réserve le droit de modifier les tarifs de ses prestations à tout moment. Les modifications n'ont aucun effet sur les gardiennages déjà en cours. Le propriétaire sera informé de tout changement par email ou autre moyen de communication convenu.</p>
        </div>
    </div>
</div>

<!-- Modal Confidentialité -->
<div id="modal-privacy" class="modal">
    <div class="modal-bg" onclick="closeModal('modal-privacy')"></div>
    <div class="modal-content w-full max-w-3xl">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50 sticky top-0 z-10">
            <h3 class="font-bold text-brand-purple">Politique de Confidentialité (nLPD)</h3>
            <button onclick="closeModal('modal-privacy')" class="text-gray-400" aria-label="Fermer"><i class="fas fa-times text-xl"></i></button>
        </div>
        <div class="modal-body text-gray-600 text-sm leading-relaxed">
            <p class="mb-4"><strong>Politique de confidentialité</strong><br>Nat'Patoune, dont le siège est à Saint-Saphorin-sur-Morges, canton de Vaud, Suisse, informe les utilisateurs du site internet [www.nat-patoune.ch] ainsi que ses clients, par la présente politique de confidentialité, des traitements de données qu'elle réalise en tant que responsable de traitement.</p>
            <p class="font-bold mb-2">1. Champ d'application</p>
            <p class="mb-4">La présente politique de confidentialité s'applique quel que soit le moyen ou le support utilisé pour accéder à notre site internet et expose les conditions dans lesquelles, lors de votre navigation, nous collectons, utilisons et conservons des informations vous concernant.</p>
            <p class="font-bold mb-2">2. Données collectées</p>
            <p class="mb-2">Lors de votre navigation sur notre site internet, nous pouvons collecter les informations suivantes :</p>
            <ul class="list-disc pl-5 mb-4 space-y-1">
                <li>Votre adresse IP</li>
                <li>La date et l'heure de votre visite</li>
                <li>Le navigateur utilisé</li>
                <li>Le type d'appareil utilisé pour vous connecter</li>
            </ul>
            <p class="mb-2">Lorsque vous remplissez un formulaire de contact ou demandez un devis, nous collectons, avec votre consentement :</p>
            <ul class="list-disc pl-5 mb-4 space-y-1">
                <li>Votre nom et prénom</li>
                <li>Votre adresse électronique</li>
                <li>Votre adresse postale</li>
                <li>Votre numéro de téléphone</li>
            </ul>
            <p class="font-bold mb-2">3. Finalités d'utilisation des données</p>
            <ul class="list-disc pl-5 mb-4 space-y-1">
                <li><strong>Fourniture de services :</strong> nous utilisons vos données pour répondre à vos demandes de contact ou d'information.</li>
                <li><strong>Personnalisation :</strong> nous analysons vos préférences pour améliorer votre expérience sur le site.</li>
                <li><strong>Intérêts légitimes :</strong> nous pouvons utiliser vos données pour surveiller l'usage du site.</li>
            </ul>
            <p class="font-bold mb-2">4. Cookies</p>
            <p class="mb-2">Nous utilisons des cookies pour garantir le bon fonctionnement du site et analyser les visites.</p>
            <ul class="list-disc pl-5 mb-4 space-y-1">
                <li><strong>Cookies nécessaires :</strong> indispensables au fonctionnement du site et aux formulaires de contact.</li>
                <li><strong>Cookies de performance :</strong> permettent de mesurer la fréquentation du site et améliorer son contenu.</li>
            </ul>
            <p class="font-bold mb-2">5. Vos droits</p>
            <p class="mb-4">Vous pouvez demander l'accès, la rectification, la transmission ou l'effacement de vos données personnelles en nous contactant via notre formulaire de contact ou par e-mail à miaou@nat-patoune.ch.</p>
            <p class="font-bold mb-2">6. Contact</p>
            <p class="mb-0">Pour toute question concernant cette Politique ou vos données personnelles, contactez-nous à : miaou@nat-patoune.ch.</p>
        </div>
    </div>
</div>

<!-- Modal Mentions légales -->
<div id="modal-mentions" class="modal">
    <div class="modal-bg" onclick="closeModal('modal-mentions')"></div>
    <div class="modal-content w-full max-w-3xl">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50 sticky top-0 z-10">
            <h3 class="font-bold text-brand-purple">Mentions légales</h3>
            <button onclick="closeModal('modal-mentions')" class="text-gray-400" aria-label="Fermer"><i class="fas fa-times text-xl"></i></button>
        </div>
        <div class="modal-body text-gray-600 text-sm leading-relaxed">
            <p class="mb-4">Les présentes mentions légales s'appliquent au site <strong>nat-patoune.ch</strong> (ci-après le « Site »).</p>
            <p class="font-bold mb-2">1. Éditeur du site</p>
            <p class="mb-4"><strong>Nat'Patoune</strong><br>Représentée par : <strong>Madame Nathalie Piguet</strong><br>Siège (localité) : <strong>Saint-Saphorin-sur-Morges, Vaud, Suisse</strong><br>Téléphone : <a class="underline hover:text-brand-purple" href="tel:+41787685047">+41 78 768 50 47</a><br>Email : <a class="underline hover:text-brand-purple email-protect" href="#">miaou@nat-patoune.ch</a></p>
            <p class="font-bold mb-2">2. Hébergement</p>
            <p class="mb-4"><strong>Hostinger International Ltd.</strong><br>61 Lordou Vironos Street, 6023 Larnaca, Chypre.</p>
            <p class="font-bold mb-2">3. Propriété intellectuelle</p>
            <p class="mb-4">Le Site et l'ensemble de ses contenus (textes, images, vidéos, graphismes, logos, éléments de design, structure) sont protégés par le droit d'auteur et, le cas échéant, par le droit des marques. Toute reproduction, représentation, modification, publication, adaptation, totale ou partielle, de tout ou partie des éléments du Site, quel que soit le moyen ou le procédé utilisé, est interdite sans autorisation écrite préalable de Nat'Patoune.</p>
            <p class="font-bold mb-2">4. Responsabilité</p>
            <p class="mb-4">Nat'Patoune s'efforce d'assurer l'exactitude et la mise à jour des informations diffusées sur le Site. Toutefois, Nat'Patoune ne peut garantir l'exactitude, la précision ou l'exhaustivité des informations mises à disposition. L'utilisation du Site se fait sous la seule responsabilité de l'utilisateur.</p>
            <p class="font-bold mb-2">5. Liens externes</p>
            <p class="mb-4">Le Site peut contenir des liens vers des sites tiers. Nat'Patoune n'exerce aucun contrôle sur ces sites et décline toute responsabilité quant à leur contenu, leurs pratiques ou leur disponibilité.</p>
            <p class="font-bold mb-2">6. Données personnelles et cookies</p>
            <p class="mb-4">Les traitements de données personnelles et l'usage des cookies sont décrits dans la <strong>Politique de confidentialité</strong> accessible depuis le Site (modale « Confidentialité ») ainsi que via la bannière cookies.</p>
            <p class="font-bold mb-2">7. Droit applicable et for juridique</p>
            <p class="mb-0">Les présentes mentions légales sont soumises au droit suisse. Sous réserve de dispositions légales impératives, le for est situé dans le canton de Vaud, Suisse.</p>
        </div>
    </div>
</div>

<!-- Modal Certificat -->
<div id="modal-certificat" class="modal">
    <div class="modal-bg" onclick="closeModal('modal-certificat')"></div>
    <div class="modal-content bg-transparent shadow-none w-auto h-auto max-w-4xl">
        <button onclick="closeModal('modal-certificat')" class="absolute -top-12 right-0 text-white p-2" aria-label="Fermer"><i class="fas fa-times text-2xl"></i></button>
        <img src="assets/img/certificat-cat-sitter-nathalie-piguet.webp" class="max-w-full max-h-[85vh] rounded-lg bg-white" alt="Certificat Cat Sitter" loading="lazy">
    </div>
</div>

<!-- Article 1 -->
<div id="article-1" class="modal">
    <div class="modal-bg" onclick="closeModal('article-1')"></div>
    <div class="modal-content w-full max-w-3xl max-h-[85vh] overflow-hidden relative z-10 flex flex-col">
        <div class="relative h-64 shrink-0">
            <img src="assets/img/garde-chat-domicile-sans-stress-vaud.webp" class="w-full h-full object-cover" alt="Chat détendu pendant garde à domicile" loading="lazy">
            <button onclick="closeModal('article-1')" class="absolute top-4 right-4 bg-white/90 p-3 rounded-full hover:bg-white text-gray-800 transition shadow-sm font-bold" aria-label="Fermer"><i class="fas fa-times text-xl"></i></button>
        </div>
        <div class="p-8 overflow-y-auto custom-scrollbar bg-white">
            <article class="blog-article prose max-w-none text-gray-600" itemscope itemtype="http://schema.org/BlogPosting">
                <header class="mb-6 border-b border-gray-100 pb-6">
                    <div class="text-xs font-bold text-brand-purple uppercase tracking-wider mb-2">Bien-être animal</div>
                    <h2 itemprop="headline" class="text-3xl font-title font-bold text-brand-text mb-4 sm:text-2xl">Pourquoi la garde à domicile réduit-elle le stress de votre chat ?</h2>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="font-medium">Par Nat'Patoune</span>
                        <span class="mx-2">•</span>
                        <span>Temps de lecture : 3 min</span>
                    </div>
                </header>
                <div itemprop="articleBody">
                    <p class="font-medium text-lg text-gray-700 mb-6">La garde à domicile s'avère être une solution apaisante pour les chats, qui sont très sensibles aux changements de territoire. Déplacer un chat en pension peut déclencher du stress, de l'anxiété, voire des troubles alimentaires. En optant pour la garde à domicile, le chat reste dans son environnement naturel, conserve ses habitudes et bénéficie d'une attention personnalisée, réduisant considérablement les perturbations émotionnelles.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Le chat : un animal territorial</h2>
                    <p>Le chat est un animal profondément attaché à son environnement. Son territoire est balisé par des repères olfactifs (phéromones) et visuels qui le rassurent. Le retirer de ce cadre pour le placer dans un lieu inconnu, avec d'autres odeurs et bruits, constitue une perte de repères majeure.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">L'impact du changement d'environnement</h2>
                    <p>Les pensions, même de qualité, imposent une promiscuité (visuelle ou olfactive) avec d'autres animaux. Pour un chat solitaire ou craintif, cela peut être source d'un stress intense, pouvant mener à des comportements indésirables ou à une baisse des défenses immunitaires.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Pourquoi la garde à domicile est bénéfique</h2>
                    <h3 class="text-lg font-bold text-brand-text mt-4 mb-2">Routine et repères visuels</h3>
                    <p>En restant chez lui, le chat conserve ses zones de couchage, ses gamelles et sa litière au même endroit. Cette stabilité est cruciale pour son équilibre mental.</p>
                    <h3 class="text-lg font-bold text-brand-text mt-4 mb-2">Présence rassurante et soins réguliers</h3>
                    <p>La visite d'un cat-sitter permet non seulement de répondre aux besoins physiologiques (nourriture, hygiène), mais aussi d'offrir une présence humaine, du jeu et des câlins, rompant ainsi la solitude sans imposer un changement de lieu.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Choisir un cat-sitter de confiance</h2>
                    <p>Il est essentiel de choisir une personne formée et fiable, capable de comprendre le langage corporel du chat et de s'adapter à son caractère, qu'il soit joueur, câlin ou indépendant.</p>
                    <div class="bg-brand-cream p-6 rounded-xl mt-8 border border-brand-purple/20">
                        <h4 class="font-bold text-brand-purple mb-2">Besoin d'une garde apaisante ?</h4>
                        <p class="text-sm">Contactez-moi pour discuter des habitudes de votre chat et organiser une pré-visite.</p>
                        <a href="#contact" onclick="closeModal('article-1')" class="inline-block mt-4 text-brand-purple font-bold underline hover:text-brand-purple-dark">Réserver ma garde →</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>

<!-- Article 2 -->
<div id="article-2" class="modal">
    <div class="modal-bg" onclick="closeModal('article-2')"></div>
    <div class="modal-content w-full max-w-3xl max-h-[85vh] overflow-hidden relative z-10 flex flex-col">
        <div class="relative h-64 shrink-0">
            <img src="assets/img/cat-sitting-domicile-vacances-suisse.webp" class="w-full h-full object-cover" alt="Chat relax chez lui pendant vacances" loading="lazy">
            <button onclick="closeModal('article-2')" class="absolute top-4 right-4 bg-white/90 p-3 rounded-full hover:bg-white text-gray-800 transition shadow-sm font-bold" aria-label="Fermer"><i class="fas fa-times text-xl"></i></button>
        </div>
        <div class="p-8 overflow-y-auto custom-scrollbar bg-white">
            <article class="blog-article prose max-w-none text-gray-600" itemscope itemtype="http://schema.org/BlogPosting">
                <header class="mb-6 border-b border-gray-100 pb-6">
                    <div class="text-xs font-bold text-brand-purple uppercase tracking-wider mb-2">Organisation & Sérénité</div>
                    <h2 itemprop="headline" class="text-3xl font-title font-bold text-brand-text mb-4">Vacances tranquilles : faire garder son chat à domicile dans le canton de Vaud</h2>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="font-medium">Par Nat'Patoune</span>
                        <span class="mx-2">•</span>
                        <span>Temps de lecture : 3 min</span>
                    </div>
                </header>
                <div itemprop="articleBody">
                    <p class="font-medium text-lg text-gray-700 mb-6">La garde à domicile dans le canton de Vaud permet de profiter de ses vacances sans se soucier de son animal. Elle garantit un cadre rassurant pour le chat, tout en assurant la sécurité du domicile. Une organisation claire (calendrier, instructions, contacts) associée à un professionnel de confiance permet de concilier tranquillité d'esprit et bien-être animal.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Pourquoi planifier à l'avance</h2>
                    <p>Les périodes de vacances scolaires sont très demandées. Réserver votre cat-sitter plusieurs semaines à l'avance vous assure de la disponibilité et permet d'organiser sereinement la pré-visite obligatoire.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Sécuriser la maison avant de partir</h2>
                    <p>Avant votre départ, pensez à fermer les fenêtres, sécuriser les balcons si nécessaire et ranger les objets dangereux. Je veille également à relever le courrier et à donner vie à votre maison (lumières, aération) pour dissuader les intrusions.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Maintenir la routine du chat</h2>
                    <h3 class="text-lg font-bold text-brand-text mt-4 mb-2">Nourriture, jeux, soins</h3>
                    <p>Je m'engage à respecter scrupuleusement les habitudes alimentaires de votre chat, ses moments de jeu préférés et, si besoin, l'administration de soins médicaux.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Choisir un cat-sitter fiable</h2>
                    <p>Opter pour une professionnelle comme Nat'Patoune, c'est la garantie d'un service sérieux. Vous recevez des nouvelles et des photos à chaque passage pour rester connecté avec votre compagnon.</p>
                    <div class="bg-brand-cream p-6 rounded-xl mt-8 border border-brand-purple/20">
                        <h4 class="font-bold text-brand-purple mb-2">Prêt pour les vacances ?</h4>
                        <p class="text-sm">Vérifions ensemble mes disponibilités pour vos prochaines dates de congés.</p>
                        <a href="#contact" onclick="closeModal('article-2')" class="inline-block mt-4 text-brand-purple font-bold underline hover:text-brand-purple-dark">Vérifier les dates →</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>

<!-- Article 3 -->
<div id="article-3" class="modal">
    <div class="modal-bg" onclick="closeModal('article-3')"></div>
    <div class="modal-content w-full max-w-3xl max-h-[85vh] overflow-hidden relative z-10 flex flex-col">
        <div class="relative h-64 shrink-0">
            <img src="assets/img/chaton-cache-couverture.webp" class="w-full h-full object-cover object-center" alt="Chaton timide caché dans une couverture" loading="lazy">
            <button onclick="closeModal('article-3')" class="absolute top-4 right-4 bg-white/90 p-3 rounded-full hover:bg-white text-gray-800 transition shadow-sm font-bold" aria-label="Fermer"><i class="fas fa-times text-xl"></i></button>
        </div>
        <div class="p-8 overflow-y-auto custom-scrollbar bg-white">
            <article class="blog-article prose max-w-none text-gray-600" itemscope itemtype="http://schema.org/BlogPosting">
                <header class="mb-6 border-b border-gray-100 pb-6">
                    <div class="text-xs font-bold text-brand-purple uppercase tracking-wider mb-2">Soins spécifiques</div>
                    <h2 itemprop="headline" class="text-3xl font-title font-bold text-brand-text mb-4">Chat âgé ou anxieux : pourquoi le cat-sitting est indispensable</h2>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="font-medium">Par Nat'Patoune</span>
                        <span class="mx-2">•</span>
                        <span>Temps de lecture : 4 min</span>
                    </div>
                </header>
                <div itemprop="articleBody">
                    <p class="font-medium text-lg text-gray-700 mb-6">Les chats âgés ont des habitudes profondément ancrées. Un changement de routine ou d'environnement peut accentuer des pathologies existantes. De leur côté, les chats anxieux réagissent très mal aux séparations ou aux bruits inconnus. Le cat-sitting à domicile répond précisément à leurs besoins : soins spécifiques, alimentation adaptée, interactions calmes et surveillance attentive.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Les besoins particuliers des chats seniors</h2>
                    <p>Avec l'âge, les chats dorment davantage et peuvent souffrir de douleurs articulaires. Le confort de leur foyer est irremplaçable. De plus, ils nécessitent souvent une surveillance accrue de leur appétit et de leur hydratation.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Anxiété féline : causes et solutions</h2>
                    <p>Un chat anxieux peut être perturbé par le moindre changement. La garde à domicile minimise ces perturbations en maintenant son environnement stable. Mon approche est basée sur la douceur et la patience, sans jamais forcer le contact.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Le rôle essentiel d'un cat-sitter expérimenté</h2>
                    <p>Je suis formée pour administrer des médicaments (comprimés, insuline) et pour repérer les signes de mal-être. Pour un chat senior ou malade, cette expertise est une sécurité indispensable.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Conseils pour choisir le bon professionnel</h2>
                    <p>Assurez-vous que votre gardien est à l'aise avec les soins médicaux si nécessaire et qu'il sait faire preuve de calme. Une pré-visite permet de valider le contact entre le chat et le cat-sitter.</p>
                    <div class="bg-brand-cream p-6 rounded-xl mt-8 border border-brand-purple/20">
                        <h4 class="font-bold text-brand-purple mb-2">Besoin de soins spécifiques ?</h4>
                        <p class="text-sm">Discutons des besoins médicaux ou comportementaux de votre compagnon pour une prise en charge sur-mesure.</p>
                        <a href="#contact" onclick="closeModal('article-3')" class="inline-block mt-4 text-brand-purple font-bold underline hover:text-brand-purple-dark">Me contacter →</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
<?php
/**
 * Articles du blog (source unique).
 *
 * - Modifiez uniquement ce fichier pour ajouter / éditer des articles.
 * - includes/blog.php et includes/modals.php lisent ce tableau et génèrent l'HTML automatiquement.
 */

return [
    [
        'id' => 'article-1',
        'card' => [
            'image' => 'assets/img/garde-chat-domicile-sans-stress-vaud.webp',
            'image_alt' => 'Chat détendu pendant garde à domicile',
            'image_classes' => 'w-full h-full object-cover transition duration-500 group-hover:scale-110',
            'badge' => 'Bien-être',
            'title_html' => 'Pourquoi la garde à domicile réduit-elle le stress de votre chat&nbsp;?',
            'excerpt' => 'La garde à domicile s\'avère être une solution apaisante pour les chats, qui sont très sensibles aux changements de territoire.',
        ],
        'modal' => [
            'header_category' => 'Bien-être animal',
            'read_time' => '3 min',
            'hero_image' => 'assets/img/garde-chat-domicile-sans-stress-vaud.webp',
            'hero_alt' => 'Chat détendu pendant garde à domicile',
            'hero_image_classes' => 'w-full h-full object-cover',
            'title_classes' => 'text-3xl font-title font-bold text-brand-text mb-4 sm:text-2xl',
            'title_html' => 'Pourquoi la garde à domicile réduit-elle le stress de votre chat ?',
            'body_html' => <<<'HTML'
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
                        <a href="#contact" onclick="closeModal('{{ARTICLE_ID}}')" class="inline-block mt-4 text-brand-purple font-bold underline hover:text-brand-purple-dark">Réserver ma garde →</a>
                    </div>
HTML,
        ],
    ],
    [
        'id' => 'article-2',
        'card' => [
            'image' => 'assets/img/cat-sitting-domicile-vacances-suisse.webp',
            'image_alt' => 'Chat relax chez lui pendant vacances',
            'image_classes' => 'w-full h-full object-cover transition duration-500 group-hover:scale-110',
            'badge' => 'Vacances',
            'title_html' => 'Vacances tranquilles : faire garder son chat à domicile dans le canton de Vaud',
            'excerpt' => 'La garde à domicile dans le canton de Vaud permet de profiter de ses vacances sans se soucier de son animal.',
        ],
        'modal' => [
            'header_category' => 'Organisation & Sérénité',
            'read_time' => '3 min',
            'hero_image' => 'assets/img/cat-sitting-domicile-vacances-suisse.webp',
            'hero_alt' => 'Chat relax chez lui pendant vacances',
            'hero_image_classes' => 'w-full h-full object-cover',
            'title_classes' => 'text-3xl font-title font-bold text-brand-text mb-4',
            'title_html' => 'Vacances tranquilles : faire garder son chat à domicile dans le canton de Vaud',
            'body_html' => <<<'HTML'
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
                        <a href="#contact" onclick="closeModal('{{ARTICLE_ID}}')" class="inline-block mt-4 text-brand-purple font-bold underline hover:text-brand-purple-dark">Vérifier les dates →</a>
                    </div>
HTML,
        ],
    ],
    [
        'id' => 'article-3',
        'card' => [
            'image' => 'assets/img/chaton-cache-couverture.webp',
            'image_alt' => 'Soin médical à domicile pour chat',
            'image_classes' => 'w-full h-full object-cover object-center transition duration-500 group-hover:scale-110',
            'badge' => 'Soins Spécifiques',
            'title_html' => 'Chat âgé ou anxieux : pourquoi le cat-sitting est indispensable',
            'excerpt' => 'Les chats âgés ont des habitudes profondément ancrées. Un changement de routine ou d\'environnement peut accentuer des pathologies existantes.',
        ],
        'modal' => [
            'header_category' => 'Soins spécifiques',
            'read_time' => '4 min',
            'hero_image' => 'assets/img/chaton-cache-couverture.webp',
            'hero_alt' => 'Chaton timide caché dans une couverture',
            'hero_image_classes' => 'w-full h-full object-cover object-center',
            'title_classes' => 'text-3xl font-title font-bold text-brand-text mb-4',
            'title_html' => 'Chat âgé ou anxieux : pourquoi le cat-sitting est indispensable',
            'body_html' => <<<'HTML'
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
                        <a href="#contact" onclick="closeModal('{{ARTICLE_ID}}')" class="inline-block mt-4 text-brand-purple font-bold underline hover:text-brand-purple-dark">Me contacter →</a>
                    </div>
HTML,
        ],
    ],
    [
        'id' => 'article-4',
        'card' => [
            'image' => 'assets/img/chaton-cache-couverture.webp',
            'image_alt' => 'Chat curieux à la maison',
            'image_classes' => 'w-full h-full object-cover object-center transition duration-500 group-hover:scale-110',
            'badge' => 'Alimentation',
            'title_html' => 'Hydratation du chat : astuces simples pour l\'encourager à boire',
            'excerpt' => 'Un chat boit parfois trop peu. Fontaine, bols, emplacement… voici des gestes simples pour améliorer son hydratation.',
        ],
        'modal' => [
            'header_category' => 'Alimentation & Hydratation',
            'read_time' => '5 min',
            'hero_image' => 'assets/img/chaton-cache-couverture.webp',
            'hero_alt' => 'Chat curieux près d\'un bol d\'eau',
            'hero_image_classes' => 'w-full h-full object-cover object-center',
            'title_classes' => 'text-3xl font-title font-bold text-brand-text mb-4',
            'title_html' => 'Hydratation du chat : astuces simples pour l\'encourager à boire',
            'body_html' => <<<'HTML'
                    <p class="font-medium text-lg text-gray-700 mb-6">L’hydratation est essentielle pour la santé rénale du chat, mais beaucoup boivent trop peu. En variant les points d’eau, en proposant une eau fraîche et en adaptant l’alimentation, on favorise des habitudes plus saines.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Multiplier les points d’eau</h2>
                    <p>Placez plusieurs bols dans des zones calmes et éloignées de la litière. Les chats aiment avoir le choix et évitent les endroits bruyants.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Eau fraîche et matériaux adaptés</h2>
                    <p>Un bol en céramique ou en verre retient moins les odeurs. Renouvelez l’eau chaque jour pour garder une eau attractive.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Fontaine et alimentation humide</h2>
                    <p>Une fontaine stimule souvent la curiosité. L’alimentation humide apporte aussi un apport hydrique important et complète la routine.</p>
                    <div class="bg-brand-cream p-6 rounded-xl mt-8 border border-brand-purple/20">
                        <h4 class="font-bold text-brand-purple mb-2">Besoin d’un suivi pendant vos absences ?</h4>
                        <p class="text-sm">Je surveille l’hydratation et l’appétit de votre chat à chaque visite.</p>
                        <a href="#contact" onclick="closeModal('{{ARTICLE_ID}}')" class="inline-block mt-4 text-brand-purple font-bold underline hover:text-brand-purple-dark">Parler de vos habitudes →</a>
                    </div>
HTML,
        ],
    ],
    [
        'id' => 'article-5',
        'card' => [
            'image' => 'assets/img/galerie-chat-1.webp',
            'image_alt' => 'Chat détendu à la maison',
            'image_classes' => 'w-full h-full object-cover transition duration-500 group-hover:scale-110',
            'badge' => 'Hygiène',
            'title_html' => 'Litière parfaite : emplacement, nettoyage et erreurs à éviter',
            'excerpt' => 'Une litière mal placée ou mal entretenue est une source fréquente de stress. Voici les bonnes pratiques.',
        ],
        'modal' => [
            'header_category' => 'Hygiène & Confort',
            'read_time' => '5 min',
            'hero_image' => 'assets/img/galerie-chat-1.webp',
            'hero_alt' => 'Chat tigré près d\'une litière propre',
            'hero_image_classes' => 'w-full h-full object-cover',
            'title_classes' => 'text-3xl font-title font-bold text-brand-text mb-4',
            'title_html' => 'Litière parfaite : emplacement, nettoyage et erreurs à éviter',
            'body_html' => <<<'HTML'
                    <p class="font-medium text-lg text-gray-700 mb-6">La litière est un repère essentiel. Un bac propre, bien placé et adapté au chat limite le stress et les accidents. Quelques réglages simples suffisent pour éviter la plupart des refus.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Choisir le bon emplacement</h2>
                    <p>Optez pour une zone calme, accessible et éloignée de la nourriture. Évitez les endroits bruyants ou trop passants.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Routine de nettoyage</h2>
                    <p>Retirez les déjections chaque jour et nettoyez le bac régulièrement avec un produit doux. La propreté est la clé.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Éviter les erreurs courantes</h2>
                    <p>Un bac trop petit, un couvercle mal accepté ou des parfums trop forts peuvent provoquer un rejet. Observez les préférences de votre chat.</p>
                    <div class="bg-brand-cream p-6 rounded-xl mt-8 border border-brand-purple/20">
                        <h4 class="font-bold text-brand-purple mb-2">Besoin d’une routine stable ?</h4>
                        <p class="text-sm">Je maintiens une litière propre et rassurante pendant vos absences.</p>
                        <a href="#contact" onclick="closeModal('{{ARTICLE_ID}}')" class="inline-block mt-4 text-brand-purple font-bold underline hover:text-brand-purple-dark">Organiser une garde →</a>
                    </div>
HTML,
        ],
    ],
    [
        'id' => 'article-6',
        'card' => [
            'image' => 'assets/img/galerie-chat-2.webp',
            'image_alt' => 'Chat en exploration',
            'image_classes' => 'w-full h-full object-cover transition duration-500 group-hover:scale-110',
            'badge' => 'Jeux',
            'title_html' => 'Jeux et stimulation : 10 minutes par jour qui changent tout',
            'excerpt' => 'Même un chat calme a besoin de stimulation. Quelques minutes de jeu structurées suffisent à réduire l’ennui.',
        ],
        'modal' => [
            'header_category' => 'Jeux & Stimulation',
            'read_time' => '5 min',
            'hero_image' => 'assets/img/galerie-chat-2.webp',
            'hero_alt' => 'Chat joueur avec un plumeau',
            'hero_image_classes' => 'w-full h-full object-cover',
            'title_classes' => 'text-3xl font-title font-bold text-brand-text mb-4',
            'title_html' => 'Jeux et stimulation : 10 minutes par jour qui changent tout',
            'body_html' => <<<'HTML'
                    <p class="font-medium text-lg text-gray-700 mb-6">Le jeu répond au besoin instinctif de chasse du chat. Une routine courte et régulière réduit l’ennui, soutient la forme physique et renforce la relation.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Structurer la séance</h2>
                    <p>Alternez mouvements rapides et pauses. Terminez toujours par une proie attrapable pour éviter la frustration.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Varier les jouets</h2>
                    <p>Canne à plume, balles légères, jouets distributeurs : la variété maintient la motivation du chat.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Adapter au tempérament</h2>
                    <p>Un chat senior préférera des jeux lents au sol. Un chat actif aura besoin de sessions plus dynamiques.</p>
                    <div class="bg-brand-cream p-6 rounded-xl mt-8 border border-brand-purple/20">
                        <h4 class="font-bold text-brand-purple mb-2">Maintenir la routine de jeu ?</h4>
                        <p class="text-sm">Je propose des séances adaptées pour stimuler votre chat pendant vos absences.</p>
                        <a href="#contact" onclick="closeModal('{{ARTICLE_ID}}')" class="inline-block mt-4 text-brand-purple font-bold underline hover:text-brand-purple-dark">Prévoir une visite →</a>
                    </div>
HTML,
        ],
    ],
];

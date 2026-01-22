<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="theme-color" content="#8F78D3">
    
    <!-- Préconnexions optimisées -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    
    <!-- Preload critique -->
    <link rel="preload" href="assets/img/hero.mp4" as="video" type="video/mp4" fetchpriority="high">
    
    <!-- Sécurité et SEO -->
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta name="referrer" content="strict-origin-when-cross-origin">
    <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.tailwindcss.com https://cdnjs.cloudflare.com https://fonts.googleapis.com https://fonts.gstatic.com https://unpkg.com data: blob:;">
    <link rel="canonical" href="https://nat-patoune.ch/">

    <!-- Métadonnées SEO -->
    <title>Nat'Patoune - Garde de chats & Gestion de domicile | Vaud</title>
    <meta name="description" content="Service de cat-sitting et de gestion de domicile par Nathalie Piguet. Garde de chats et vigilance maison : Morges, Lausanne, Échallens.">
    <meta name="author" content="Nat'Patoune">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph -->
    <meta property="og:url" content="https://nat-patoune.ch/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Nat'Patoune - Garde de chats & Home Sitting">
    <meta property="og:description" content="Service professionnel de garde de chats et surveillance de domicile dans le canton de Vaud.">
    <meta property="og:image" content="https://nat-patoune.ch/assets/img/galerie-chat-1.webp">
    <meta property="og:locale" content="fr_CH">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon-natpatoune-chat.png">
    
    <!-- Structured Data optimisé -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Nat'Patoune",
      "description": "Service professionnel de garde de chats et surveillance de domicile dans le canton de Vaud",
      "url": "https://nat-patoune.ch",
      "telephone": "+41787685047",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Saint-Saphorin-sur-Morges",
        "addressRegion": "Vaud",
        "addressCountry": "CH"
      },
      "openingHours": "Mo-Sa 08:00-19:00",
      "priceRange": "CHF 30-40",
      "serviceType": "Cat sitting, Home sitting, Pet care",
      "image": "https://nat-patoune.ch/assets/img/logo-natpatoune.jpg",
      "@id": "https://nat-patoune.ch",
      "email": "miaou@nat-patoune.ch",
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 46.5416,
        "longitude": 6.4479
      }
    }
    </script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome optimisé -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.media='all'">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Configuration Tailwind -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-purple': '#8F78D3',
                        'brand-purple-dark': '#705eb0',
                        'brand-pink': '#E8AEC3',
                        'brand-cream': '#FBF9F4',
                        'brand-beige': '#F8F5EF',
                        'brand-yellow': '#F3D250',
                        'brand-text': '#3A3A3A',
                    },
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                        title: ['Montserrat', 'sans-serif'],
                    },
                    borderRadius: { 'xl': '14px', '2xl': '22px', '3xl': '30px' },
                    boxShadow: { 'soft': '0 10px 40px -10px rgba(0,0,0,0.08)' }
                }
            }
        }
    </script>
    
    <!-- Styles critiques -->
    <style>
        /* Fallback fonts optimisés */
        @font-face {
            font-family: 'Montserrat Fallback';
            size-adjust: 105%;
            ascent-override: 92%;
            src: local('Arial');
        }

        @font-face {
            font-family: 'Roboto Fallback';
            size-adjust: 100%;
            ascent-override: 95%;
            src: local('Helvetica');
        }
        
        /* Styles de base */
        body { 
            color: #3A3A3A; 
            background-color: #FBF9F4; 
            overflow-x: hidden; 
            font-family: 'Roboto', 'Roboto Fallback', sans-serif;
        }
        
        /* Gestion progressive du contenu */
        #services,
        #cadeau,
        #zones-tarifs,
        #blog,
        #galerie,
        #avis,
        #propos,
        #contact,
        footer {
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        
        body.loaded #services,
        body.loaded #cadeau,
        body.loaded #zones-tarifs,
        body.loaded #blog,
        body.loaded #galerie,
        body.loaded #avis,
        body.loaded #propos,
        body.loaded #contact,
        body.loaded footer {
            opacity: 1;
        }
        
        /* Hero Video */
        .hero-section { 
            position: relative; 
            overflow: hidden; 
            background-color: #3A3A3A; 
            height: 85vh; 
            min-height: 500px; 
        }
        .hero-video-container { 
            position: absolute; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
            z-index: 0; 
        }
        .hero-video { 
            width: 100%; 
            height: 100%; 
            object-fit: cover; 
        }
        .hero-overlay { 
            position: absolute; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
            background: rgba(0,0,0,0.4); 
            z-index: 1; 
        }
        .hero-content { 
            position: relative; 
            z-index: 10; 
        }

        /* Modales */
        .modal { 
            display: none; 
            position: fixed; 
            inset: 0; 
            z-index: 9999; 
            align-items: center; 
            justify-content: center; 
            opacity: 0; 
            transition: opacity 0.3s ease; 
            padding: 1rem; 
        }
        .modal.open { 
            display: flex; 
            opacity: 1; 
        }
        .modal-bg { 
            position: absolute; 
            inset: 0; 
            background: rgba(0,0,0,0.8); 
            backdrop-filter: blur(4px); 
        }
        .modal-content { 
            position: relative; 
            background: white; 
            border-radius: 20px; 
            z-index: 10; 
            transform: scale(0.95); 
            transition: transform 0.3s ease; 
            width: 100%; 
            max-width: 900px; 
            max-height: 85vh; 
            display: flex; 
            flex-direction: column; 
            overflow: hidden;
        }
        .modal.open .modal-content { 
            transform: scale(1); 
        }
        .modal-body { 
            overflow-y: auto; 
            padding: 24px; 
            -webkit-overflow-scrolling: touch; 
        }

        /* Cookie Banner */
        #cookie-banner {
            position: fixed; 
            bottom: 0; 
            left: 0; 
            width: 100%; 
            background: white; 
            border-top: 1px solid #e5e7eb; 
            padding: 24px; 
            z-index: 10000; 
            box-shadow: 0 -4px 25px rgba(0,0,0,0.1); 
            transform: translateY(100%); 
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex; 
            flex-direction: column; 
            gap: 20px;
        }
        @media (min-width: 768px) {
            #cookie-banner { 
                flex-direction: row; 
                align-items: center; 
                justify-content: space-between; 
                padding: 20px 40px; 
            }
        }
        #cookie-banner.visible { 
            transform: translateY(0); 
        }

        /* FABs */
        .fab-container { 
            position: fixed; 
            bottom: 20px; 
            right: 20px; 
            z-index: 900; 
            display: flex; 
            flex-direction: column; 
            gap: 12px; 
        }
        .fab-btn { 
            width: 50px; 
            height: 50px; 
            border-radius: 50%; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            color: white; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.2); 
            transition: all 0.3s ease; 
            font-size: 1.4rem; 
        }
        .fab-btn:hover { 
            transform: scale(1.1); 
            box-shadow: 0 6px 20px rgba(0,0,0,0.25); 
        }
        .fab-btn:active { 
            transform: scale(0.95); 
        }
        .btn-whatsapp { 
            background-color: #25D366; 
        }
        .btn-phone { 
            background-color: #34B7F1; 
        }
        .btn-top { 
            background-color: #8F78D3; 
            opacity: 0; 
            pointer-events: none; 
            transition: opacity 0.3s, transform 0.3s; 
        }
        .btn-top.show { 
            opacity: 1; 
            pointer-events: auto; 
        }

        /* Mobile */
        @media (max-width: 640px) {
            h1 { 
                font-size: 2rem !important; 
                line-height: 1.2 !important; 
            }
            .hero-section { 
                height: 70vh; 
            }
            .top-email { 
                font-size: 0.75rem; 
            }
            #cookie-banner { 
                flex-direction: column; 
                text-align: center; 
            }
        }

        /* Scrollbar */
        .custom-scrollbar::-webkit-scrollbar { 
            width: 6px; 
        }
        .custom-scrollbar::-webkit-scrollbar-track { 
            background: #F8F5EF; 
        }
        .custom-scrollbar::-webkit-scrollbar-thumb { 
            background: #E8AEC3; 
            border-radius: 10px; 
        }
        
        /* Typographie */
        .prose p { 
            margin-bottom: 1.2em; 
            line-height: 1.6; 
        }
        .prose h2 { 
            color: #8F78D3; 
            font-weight: 700; 
            font-family: 'Montserrat', 'Montserrat Fallback', sans-serif; 
            margin-top: 1.5em; 
            margin-bottom: 0.8em; 
            font-size: 1.5rem; 
        }
        .prose h3 { 
            color: #3A3A3A; 
            font-weight: 600; 
            font-family: 'Montserrat', 'Montserrat Fallback', sans-serif; 
            margin-top: 1.2em; 
            margin-bottom: 0.6em; 
            font-size: 1.2rem; 
        }
        .line-clamp-3 { 
            overflow: hidden; 
            display: -webkit-box; 
            -webkit-box-orient: vertical; 
            -webkit-line-clamp: 3; 
        }
        
        /* Menu dropdown */
        .group:hover .group-hover\:block { 
            display: block; 
            animation: fadeIn 0.2s ease-out; 
        }
        @keyframes fadeIn { 
            from { 
                opacity: 0; 
                transform: translateY(-10px); 
            } 
            to { 
                opacity: 1; 
                transform: translateY(0); 
            } 
        }
        
        /* Footer */
        .footer-link { 
            position: relative; 
            display: inline-block; 
        }
        .footer-link::after { 
            content: ''; 
            position: absolute; 
            width: 0; 
            height: 1px; 
            bottom: -2px; 
            left: 0; 
            background-color: #E8AEC3; 
            transition: width 0.3s; 
        }
        .footer-link:hover::after { 
            width: 100%; 
        }
        
        /* Service Worker fallback */
        .offline-message {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: #F3D250;
            color: #3A3A3A;
            padding: 10px;
            text-align: center;
            z-index: 10001;
        }
        
        /* Performance optimisations */
        img[loading="lazy"] {
            content-visibility: auto;
        }
    </style>
</head>
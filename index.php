<?php
// Détection de la page actuelle
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="fr-CH" class="scroll-smooth">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body class="bg-brand-cream text-brand-text overflow-x-hidden">
    <!-- Bannière Cookies -->
    <?php include 'includes/cookie-banner.php'; ?>
    
    <!-- Message offline -->
    <?php include 'includes/offline-message.php'; ?>
    
    <!-- Boutons flottants -->
    <?php include 'includes/fab-buttons.php'; ?>
    
    <!-- Barre supérieure -->
    <?php include 'includes/topbar.php'; ?>
    
    <!-- Navigation -->
    <?php include 'includes/header.php'; ?>
    
    <!-- Hero Section -->
    <?php include 'includes/hero.php'; ?>
    
    <!-- Services -->
    <?php include 'includes/services.php'; ?>
    
    <!-- Cadeau -->
    <?php include 'includes/cadeau.php'; ?>
    
    <!-- Zones & Tarifs -->
    <?php include 'includes/zones-tarifs.php'; ?>
    
    <!-- Blog -->
    <?php include 'includes/blog.php'; ?>
    
    <!-- Galerie -->
    <?php include 'includes/galerie.php'; ?>
    
    <!-- Avis -->
    <?php include 'includes/avis.php'; ?>
    
    <!-- À propos -->
    <?php include 'includes/propos.php'; ?>
    
    <!-- Contact -->
    <?php include 'includes/contact.php'; ?>
    
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <!-- Toutes les modales -->
    <?php include 'includes/modals.php'; ?>
    
    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
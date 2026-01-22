 <!-- Blog -->
    <section id="blog" class="py-16 md:py-24 bg-white" aria-labelledby="blog-heading">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="text-brand-purple font-bold tracking-wider uppercase text-sm">Conseils d'experte</span>
                <h2 id="blog-heading" class="text-3xl md:text-4xl font-title font-bold text-brand-text mt-2 mb-4">Le Guide du Chat Heureux</h2>
                <p class="text-gray-500 max-w-2xl mx-auto">En tant que cat-sitter certifiée, je partage ici mes conseils pour garantir le bien-être de vos compagnons.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
<?php
    $articles = require __DIR__ . '/articles_data.php';
    foreach ($articles as $article):
        $id = $article['id'];
        $card = $article['card'];
?>
                <article onclick="openModal('<?php echo htmlspecialchars($id, ENT_QUOTES, 'UTF-8'); ?>')" class="group cursor-pointer bg-gray-50 rounded-2xl p-4 hover:shadow-lg transition flex flex-col h-full border border-gray-100">
                    <figure class="rounded-xl overflow-hidden mb-4 h-52 bg-gray-200 relative m-0 shrink-0">
                        <img src="<?php echo htmlspecialchars($card['image'], ENT_QUOTES, 'UTF-8'); ?>" width="1200" height="675" class="<?php echo htmlspecialchars($card['image_classes'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($card['image_alt'], ENT_QUOTES, 'UTF-8'); ?>" loading="lazy">
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-brand-purple"><?php echo htmlspecialchars($card['badge'], ENT_QUOTES, 'UTF-8'); ?></div>
                    </figure>
                    <div class="flex flex-col flex-grow">
                        <h3 class="font-bold text-lg mb-3 group-hover:text-brand-purple leading-tight text-brand-text"><?php echo $card['title_html']; ?></h3>
                        <p class="text-sm text-gray-600 line-clamp-3 mb-4 flex-grow"><?php echo htmlspecialchars($card['excerpt'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <span class="text-sm text-brand-purple font-bold mt-auto inline-flex items-center">Lire l'article <i class="fas fa-arrow-right ml-2 text-xs transition-transform group-hover:translate-x-1"></i></span>
                    </div>
                </article>
<?php endforeach; ?>
</div>
        </div>
    </section>

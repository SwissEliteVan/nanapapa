# Nat'Patoune - site statique

Ce projet est une version statique (HTML/CSS/JS) du site Nat'Patoune, prête à être déployée sur GitHub Pages ou Cloudflare Pages.

## Édition simple (contenu)
- **Page d'accueil** : modifiez `index.html` pour ajuster les textes, sections et images.
- **Blog** : les articles sont dans `blog/posts/*.md` (un fichier = un article). La liste est générée à partir de `blog/posts.json`.
- **Pages de blog** : `blog/index.html` (liste) et `blog/post.html` (article).

## Ajouter un article (blog Markdown)
1. Créez un nouveau fichier Markdown dans `blog/posts/` avec un nom de fichier qui correspond au slug souhaité.
   - Exemple : `blog/posts/mon-nouvel-article.md`
2. Rédigez le contenu en Markdown (titres, listes, paragraphes).
3. Ajoutez l'entrée correspondante dans `blog/posts.json` :
   - `title` : titre de l'article
   - `date` : date au format `YYYY-MM-DD`
   - `slug` : doit correspondre au nom du fichier (ex: `mon-nouvel-article`)
   - `excerpt` : résumé court (utilisé pour SEO)
   - `cover` : chemin de l'image (ex: `../assets/img/mon-image.webp`)
   - `category` : catégorie affichée sur la carte
4. Ajoutez l'image de couverture dans `assets/img/` (format WebP recommandé).

## Newsletter / formulaire
Les formulaires newsletter utilisent Formspree (gratuit) par défaut. Remplacez `https://formspree.io/f/your-id` par votre propre endpoint :
- Dans `index.html`
- Dans `blog/index.html`
- Dans `blog/post.html`

La page `merci.html` est utilisée pour confirmer l'inscription.

## Structure utile
- `index.html` : page d'accueil
- `blog/index.html` : liste des articles
- `blog/post.html` : page d'article (via `?slug=...`)
- `blog/posts/*.md` : contenus Markdown
- `blog/posts.json` : index des articles
- `assets/js/` : scripts légers (blog, newsletter, interactions)
- `assets/css/` : styles minifiés

## Liste des fichiers modifiés
- `index.html`
- `assets/js/main.js`
- `assets/js/blog.js`
- `assets/js/newsletter.js`
- `assets/css/site.min.css`
- `assets/css/markdown.min.css`
- `blog/index.html`
- `blog/post.html`
- `blog/posts.json`
- `blog/posts/garde-domicile-reduit-stress-chat.md`
- `blog/posts/vacances-tranquilles-garde-chat-vaud.md`
- `blog/posts/chat-age-anxieux-cat-sitting.md`
- `blog/posts/hydratation-chat-astuces.md`
- `blog/posts/litiere-parfaite-erreurs.md`
- `blog/posts/jeux-stimulation-quotidienne.md`
- `merci.html`
- `README.md`

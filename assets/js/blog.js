document.addEventListener('DOMContentLoaded', () => {
  const listContainer = document.querySelector('[data-blog-list]');
  const postContainer = document.querySelector('[data-blog-post]');
  const postsUrl = 'posts.json';

  const normalizeCover = (path) => {
    if (!path) {
      return '';
    }
    if (path.startsWith('http') || path.startsWith('/')) {
      return path;
    }
    return `../${path}`;
  };

  const renderList = (posts) => {
    if (!listContainer) {
      return;
    }
    listContainer.innerHTML = '';
    posts
      .sort((a, b) => new Date(b.date) - new Date(a.date))
      .forEach((post) => {
        const article = document.createElement('article');
        article.className = 'bg-brand-cream rounded-3xl shadow-soft overflow-hidden flex flex-col';
        const coverPath = normalizeCover(post.cover);
        article.innerHTML = `
          <a href="post.html?slug=${post.slug}" class="block h-full">
            <div class="relative h-52">
              <img src="${coverPath}" alt="${post.title}" class="w-full h-full object-cover" loading="lazy" />
              <span class="absolute top-4 left-4 bg-white/90 text-xs font-semibold text-brand-purple px-3 py-1 rounded-full">${post.category}</span>
            </div>
            <div class="p-6">
              <p class="text-xs uppercase tracking-widest text-brand-purple font-semibold">${new Date(post.date).toLocaleDateString('fr-CH')}</p>
              <h2 class="text-2xl font-title font-bold mt-2">${post.title}</h2>
              <p class="text-sm text-gray-600 mt-3">${post.excerpt}</p>
              <span class="inline-flex items-center gap-2 text-brand-purple font-semibold text-sm mt-4">Lire l'article <i class="fas fa-arrow-right"></i></span>
            </div>
          </a>
        `;
        listContainer.appendChild(article);
      });
  };

  const renderPost = (post, markdown) => {
    if (!postContainer) {
      return;
    }
    const titleEl = document.querySelector('[data-post-title]');
    const dateEl = document.querySelector('[data-post-date]');
    const coverEl = document.querySelector('[data-post-cover]');
    const categoryEl = document.querySelector('[data-post-category]');
    const contentEl = document.querySelector('[data-post-content]');
    const metaDescription = document.querySelector('meta[name="description"]');

    if (titleEl) {
      titleEl.textContent = post.title;
    }
    if (dateEl) {
      dateEl.textContent = new Date(post.date).toLocaleDateString('fr-CH');
    }
    if (coverEl) {
      coverEl.src = normalizeCover(post.cover);
      coverEl.alt = post.title;
    }
    if (categoryEl) {
      categoryEl.textContent = post.category;
    }
    if (contentEl && window.marked) {
      contentEl.innerHTML = window.marked.parse(markdown);
    }
    if (metaDescription) {
      metaDescription.setAttribute('content', post.excerpt);
    }
    document.title = `${post.title} | Nat'Patoune`;
  };

  const renderPostError = (message) => {
    if (postContainer) {
      postContainer.innerHTML = `<p class="text-gray-600">${message}</p>`;
    }
  };

  fetch(postsUrl)
    .then((response) => response.json())
    .then((posts) => {
      if (listContainer) {
        renderList(posts);
      }
      if (postContainer) {
        const slug = new URLSearchParams(window.location.search).get('slug');
        const post = posts.find((item) => item.slug === slug);
        if (!post) {
          renderPostError("Article introuvable. Revenez à la liste des articles.");
          return;
        }
        fetch(`posts/${post.slug}.md`)
          .then((response) => response.text())
          .then((markdown) => renderPost(post, markdown))
          .catch(() => renderPostError("Impossible de charger l'article."));
      }
    })
    .catch(() => {
      if (listContainer) {
        listContainer.innerHTML = '<p class="text-gray-600">Les articles seront bientôt disponibles.</p>';
      }
      if (postContainer) {
        renderPostError("Impossible de charger l'article.");
      }
    });
});

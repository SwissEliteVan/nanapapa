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
        article.className = 'blog-card';
        const coverPath = normalizeCover(post.cover);
        article.innerHTML = `
          <a href="post.html?slug=${post.slug}" class="blog-card__link">
            <div class="blog-card__media">
              <img src="${coverPath}" alt="${post.title}" loading="lazy" />
              <span class="blog-card__badge">${post.category}</span>
            </div>
            <div class="blog-card__body">
              <p class="section__kicker">${new Date(post.date).toLocaleDateString('fr-CH')}</p>
              <h2 class="heading heading--md">${post.title}</h2>
              <p>${post.excerpt}</p>
              <span class="blog-card__link">Lire l'article <i class="fas fa-arrow-right" aria-hidden="true"></i></span>
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
      coverEl.alt = post.cover_alt || post.title;
    }
    if (categoryEl) {
      categoryEl.textContent = post.category;
    }
    if (contentEl && window.marked) {
      contentEl.innerHTML = window.marked.parse(markdown);
    }
    if (metaDescription) {
      metaDescription.setAttribute('content', post.meta_description || post.excerpt);
    }
    document.title = post.meta_title ? `${post.meta_title} | Nat'Patoune` : `${post.title} | Nat'Patoune`;
  };

  const renderPostError = (message) => {
    if (postContainer) {
      postContainer.innerHTML = `<p>${message}</p>`;
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
        listContainer.innerHTML = '<p>Les articles seront bientôt disponibles.</p>';
      }
      if (postContainer) {
        renderPostError("Impossible de charger l'article.");
      }
    });
});

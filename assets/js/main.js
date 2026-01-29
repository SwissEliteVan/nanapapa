document.addEventListener('DOMContentLoaded', () => {
  const burger = document.getElementById('burger');
  const mobileMenu = document.getElementById('mobile-menu');
  if (burger && mobileMenu) {
    burger.addEventListener('click', () => {
      const isOpen = !mobileMenu.classList.contains('is-hidden');
      mobileMenu.classList.toggle('is-hidden');
      burger.setAttribute('aria-expanded', String(!isOpen));
    });
  }

  const scrollTopButton = document.getElementById('scroll-top');
  if (scrollTopButton) {
    scrollTopButton.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  }

  const contactMessage = document.getElementById('contact-message');
  document.querySelectorAll('[data-zone]').forEach((button) => {
    button.addEventListener('click', () => {
      if (contactMessage) {
        contactMessage.value = `Demande pour ${button.dataset.zone}.`;
      }
      const contactSection = document.getElementById('contact');
      if (contactSection) {
        contactSection.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  const cookieBanner = document.getElementById('cookie-banner');
  const cookieAccept = document.getElementById('cookie-accept');
  const cookieDecline = document.getElementById('cookie-decline');
  if (cookieBanner && !localStorage.getItem('cookieConsent')) {
    cookieBanner.classList.remove('is-hidden');
  }
  if (cookieAccept) {
    cookieAccept.addEventListener('click', () => {
      localStorage.setItem('cookieConsent', 'accepted');
      if (cookieBanner) {
        cookieBanner.classList.add('is-hidden');
      }
    });
  }
  if (cookieDecline) {
    cookieDecline.addEventListener('click', () => {
      localStorage.setItem('cookieConsent', 'declined');
      if (cookieBanner) {
        cookieBanner.classList.add('is-hidden');
      }
    });
  }

  const loyaltyPopup = document.getElementById('loyalty-popup');
  const loyaltyClose = document.getElementById('loyalty-close');
  if (loyaltyPopup && !localStorage.getItem('loyaltyPopupSeen')) {
    setTimeout(() => {
      loyaltyPopup.classList.remove('is-hidden');
    }, 5000);
  }
  if (loyaltyClose && loyaltyPopup) {
    loyaltyClose.addEventListener('click', () => {
      loyaltyPopup.classList.add('is-hidden');
      localStorage.setItem('loyaltyPopupSeen', 'true');
    });
  }

  const giftOpen = document.getElementById('gift-open');
  const giftModal = document.getElementById('modal-gift');
  const giftClose = document.getElementById('gift-close');
  if (giftOpen && giftModal) {
    giftOpen.addEventListener('click', () => {
      giftModal.classList.remove('is-hidden');
    });
  }
  if (giftClose && giftModal) {
    giftClose.addEventListener('click', () => {
      giftModal.classList.add('is-hidden');
    });
  }

  const certificatOpen = document.getElementById('certificat-open');
  const certificatModal = document.getElementById('modal-certificat');
  const certificatClose = document.getElementById('certificat-close');
  if (certificatOpen && certificatModal) {
    certificatOpen.addEventListener('click', () => {
      certificatModal.classList.remove('is-hidden');
    });
  }
  if (certificatClose && certificatModal) {
    certificatClose.addEventListener('click', () => {
      certificatModal.classList.add('is-hidden');
    });
  }

  document.querySelectorAll('[data-modal]').forEach((button) => {
    button.addEventListener('click', () => {
      const modalId = button.getAttribute('data-modal');
      const modal = modalId ? document.getElementById(modalId) : null;
      if (modal) {
        modal.classList.remove('is-hidden');
      }
    });
  });

  document.querySelectorAll('.modal-close').forEach((button) => {
    button.addEventListener('click', () => {
      const modalId = button.getAttribute('data-close');
      const modal = modalId ? document.getElementById(modalId) : null;
      if (modal) {
        modal.classList.add('is-hidden');
      }
    });
  });

  [certificatModal, giftModal, loyaltyPopup].forEach((modal) => {
    if (modal) {
      modal.addEventListener('click', (event) => {
        if (event.target === modal) {
          modal.classList.add('is-hidden');
        }
      });
    }
  });

  const blogGrid = document.querySelector('[data-blog-home]');
  if (blogGrid) {
    const postsUrl = 'blog/posts.json';
    fetch(postsUrl)
      .then((response) => response.json())
      .then((posts) => {
        posts
          .sort((a, b) => new Date(b.date) - new Date(a.date))
          .slice(0, 3)
          .forEach((post) => {
            const card = document.createElement('article');
            card.className = 'blog-card';
            card.innerHTML = `
              <a href="blog/post.html?slug=${post.slug}" class="blog-card__link" aria-label="${post.title}">
                <div class="blog-card__media">
                  <img src="${post.cover}" alt="${post.title}" loading="lazy" />
                  <span class="blog-card__badge">${post.category}</span>
                </div>
                <div class="blog-card__body">
                  <h3 class="heading heading--md">${post.title}</h3>
                  <p>${post.excerpt}</p>
                  <span class="blog-card__link">Lire l'article</span>
                </div>
              </a>
            `;
            blogGrid.appendChild(card);
          });
      })
      .catch(() => {
        blogGrid.innerHTML = '<p>Les articles seront bientôt disponibles.</p>';
      });
  }
});

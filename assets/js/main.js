document.addEventListener('DOMContentLoaded', () => {
  const burger = document.getElementById('burger');
  const mobileMenu = document.getElementById('mobile-menu');
  if (burger && mobileMenu) {
    burger.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
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
    cookieBanner.classList.remove('hidden');
  }
  if (cookieAccept) {
    cookieAccept.addEventListener('click', () => {
      localStorage.setItem('cookieConsent', 'accepted');
      if (cookieBanner) {
        cookieBanner.classList.add('hidden');
      }
    });
  }
  if (cookieDecline) {
    cookieDecline.addEventListener('click', () => {
      localStorage.setItem('cookieConsent', 'declined');
      if (cookieBanner) {
        cookieBanner.classList.add('hidden');
      }
    });
  }

  const loyaltyPopup = document.getElementById('loyalty-popup');
  const loyaltyClose = document.getElementById('loyalty-close');
  if (loyaltyPopup && !localStorage.getItem('loyaltyPopupSeen')) {
    setTimeout(() => {
      loyaltyPopup.classList.remove('hidden');
      loyaltyPopup.classList.add('flex');
    }, 5000);
  }
  if (loyaltyClose && loyaltyPopup) {
    loyaltyClose.addEventListener('click', () => {
      loyaltyPopup.classList.add('hidden');
      loyaltyPopup.classList.remove('flex');
      localStorage.setItem('loyaltyPopupSeen', 'true');
    });
  }

  const giftOpen = document.getElementById('gift-open');
  const giftModal = document.getElementById('modal-gift');
  const giftClose = document.getElementById('gift-close');
  if (giftOpen && giftModal) {
    giftOpen.addEventListener('click', () => {
      giftModal.classList.remove('hidden');
      giftModal.classList.add('flex');
    });
  }
  if (giftClose && giftModal) {
    giftClose.addEventListener('click', () => {
      giftModal.classList.add('hidden');
      giftModal.classList.remove('flex');
    });
  }

  const certificatOpen = document.getElementById('certificat-open');
  const certificatModal = document.getElementById('modal-certificat');
  const certificatClose = document.getElementById('certificat-close');
  if (certificatOpen && certificatModal) {
    certificatOpen.addEventListener('click', () => {
      certificatModal.classList.remove('hidden');
      certificatModal.classList.add('flex');
    });
  }
  if (certificatClose && certificatModal) {
    certificatClose.addEventListener('click', () => {
      certificatModal.classList.add('hidden');
      certificatModal.classList.remove('flex');
    });
  }

  document.querySelectorAll('[data-modal]').forEach((button) => {
    button.addEventListener('click', () => {
      const modalId = button.getAttribute('data-modal');
      const modal = modalId ? document.getElementById(modalId) : null;
      if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
      }
    });
  });

  document.querySelectorAll('.modal-close').forEach((button) => {
    button.addEventListener('click', () => {
      const modalId = button.getAttribute('data-close');
      const modal = modalId ? document.getElementById(modalId) : null;
      if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
      }
    });
  });

  [certificatModal, giftModal].forEach((modal) => {
    if (modal) {
      modal.addEventListener('click', (event) => {
        if (event.target === modal) {
          modal.classList.add('hidden');
          modal.classList.remove('flex');
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
            card.className = 'bg-brand-cream rounded-2xl p-4 shadow-soft flex flex-col h-full';
            card.innerHTML = `
              <a href="blog/post.html?slug=${post.slug}" class="block">
                <div class="relative h-44 rounded-xl overflow-hidden mb-4">
                  <img src="${post.cover}" alt="${post.title}" class="w-full h-full object-cover" loading="lazy" />
                  <span class="absolute top-3 left-3 bg-white/90 text-xs font-semibold text-brand-purple px-3 py-1 rounded-full">${post.category}</span>
                </div>
                <h3 class="font-semibold text-lg mb-2">${post.title}</h3>
                <p class="text-sm text-gray-600 mb-4">${post.excerpt}</p>
                <span class="text-brand-purple font-semibold text-sm">Lire l'article</span>
              </a>
            `;
            blogGrid.appendChild(card);
          });
      })
      .catch(() => {
        blogGrid.innerHTML = '<p class="text-gray-600">Les articles seront bientôt disponibles.</p>';
      });
  }
});

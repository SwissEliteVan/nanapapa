document.addEventListener('DOMContentLoaded', () => {
  const forms = document.querySelectorAll('.newsletter-form');
  forms.forEach((form) => {
    const message = form.querySelector('[data-newsletter-message]');
    const submitButton = form.querySelector('button[type="submit"]');
    const redirectUrl = form.getAttribute('data-redirect');

    const setMessage = (text, isError) => {
      if (!message) {
        return;
      }
      message.textContent = text;
      message.classList.remove('is-error', 'is-success');
      message.classList.add(isError ? 'is-error' : 'is-success');
      message.classList.add('is-visible');
    };

    form.addEventListener('submit', async (event) => {
      event.preventDefault();
      if (submitButton) {
        submitButton.disabled = true;
      }
      if (message) {
        message.classList.remove('is-visible');
      }

      try {
        const response = await fetch(form.action, {
          method: form.method || 'POST',
          body: new FormData(form),
          headers: { Accept: 'application/json' }
        });

        if (response.ok) {
          setMessage('Merci ! Votre inscription est confirmée.', false);
          form.reset();
          if (redirectUrl) {
            window.location.href = redirectUrl;
          }
        } else {
          setMessage("Une erreur est survenue. Veuillez réessayer.", true);
        }
      } catch (error) {
        setMessage("Impossible d'envoyer le formulaire. Veuillez vérifier votre connexion.", true);
      } finally {
        if (submitButton) {
          submitButton.disabled = false;
        }
      }
    });
  });
});

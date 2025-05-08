document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contact-form');
    form.addEventListener('submit', e => {
      e.preventDefault();
      const data = new FormData(form);
      data.append('action', 'webidea_send_contact');
      fetch(webideaAjax.ajax_url, {
        method: 'POST',
        credentials: 'same-origin',
        body: data,
      })
      .then(r => r.json())
      .then(json => {
        if (json.success) {
          form.innerHTML = '<p class="success">Merci, votre message a bien été envoyé !</p>';
        } else {
          form.insertAdjacentHTML('beforeend', '<p class="error">Erreur, veuillez réessayer.</p>');
        }
      });
    });
  });
  
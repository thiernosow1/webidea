document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("contact-form");

    form.addEventListener("submit", function(e) {
        e.preventDefault();
        clearErrors();

        const formData = new FormData(form);
        const errors = validateForm(formData);
        if (Object.keys(errors).length > 0) {
            displayErrors(errors);
            return;
        }

        // Prépare les paramètres AJAX
        const params = new URLSearchParams();
        params.append('action', 'handle_contact');
        formData.forEach((val, key) => {
            params.append(key, val);
        });

        // Envoi AJAX
        fetch(contactForm.ajax_url, {
                method: "POST",
                body: params,
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                }
            })
            .then(response => {
                if (!response.ok) {
                    return response.text().then(txt => {
                        console.error(`AJAX HTTP ${response.status}:`, txt);
                        throw new Error(txt);
                    });
                }
                return response.json();
            })
            .then(data => {
                console.log("Réponse AJAX :", data);
                if (data.success) {
                    form.reset();
                    document.querySelector(".contact").innerHTML = `
                    <div class="success-message">${data.data.message}</div>
                `;
                } else {
                    if (data.errors && data.errors.global) {
                        // Affiche une erreur globale
                        const globalError = document.createElement("div");
                        globalError.classList.add("error-text");
                        globalError.textContent = data.errors.global;
                        form.prepend(globalError);
                    }
                    displayErrors(data.errors);
                }
            })
            .catch(error => {
                console.error("Erreur AJAX :", error);
                const globalError = document.createElement("div");
                globalError.classList.add("error-text");
                globalError.textContent = "Erreur serveur : impossible de traiter la demande.";
                form.prepend(globalError);
            });
    });

    function validateForm(formData) {
        const errors = {};
        if (!formData.get("name")) errors.name = "Le nom est requis.";
        if (!formData.get("prenom")) errors.prenom = "Le prénom est requis.";
        if (!formData.get("email")) errors.email = "L'adresse email est requise.";
        if (!formData.get("subject")) errors.subject = "Le sujet est requis.";
        if (!formData.get("message")) errors.message = "Le message est requis.";
        if (!formData.get("terms")) errors.terms = "Vous devez accepter les termes.";
        return errors;
    }

    function displayErrors(errors) {
        for (const field in errors) {
            const input = document.querySelector(`[name="${field}"]`);
            if (!input) continue;
            const errorText = document.createElement("p");
            errorText.classList.add("error-text");
            errorText.textContent = errors[field];
            input.classList.add("error");
            input.parentElement.appendChild(errorText);
        }
    }

    function clearErrors() {
        document.querySelectorAll(".error-text").forEach(el => el.remove());
        document.querySelectorAll(".error").forEach(el => el.classList.remove("error"));
    }
});
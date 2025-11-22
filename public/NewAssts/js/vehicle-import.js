(function () {
    const form = document.getElementById('vehicleImportForm');
    if (!form) return;

    form.addEventListener('submit', async function (e) {
        e.preventDefault();
        const formElement = this;
        const submitButton = formElement.querySelector('button[type="submit"]');
        const formData = new FormData(formElement);
        const data = {};
        for (let [key, value] of formData.entries()) { data[key] = value; }
        // Let the server validate — we only do minimal preflight check
        // (to avoid unnecessary submissions in case the form is clearly empty)
        if (!data.name && !data.phone && !data.email && !data.brand && !data.condition && !data.model && !data.year && !data.color) {
            if (window.showToast) showToast('error', 'Missing fields', 'Please fill in the form.');
            else alert('Please fill in the form.');
            return;
        }

        // Prepare UI feedback
        if (submitButton) { submitButton.disabled = true; submitButton.dataset.original = submitButton.innerHTML; submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...'; }
        // Retrieve CSRF token from meta tag (default Laravel config)
        const csrfTokenMeta = document.querySelector('meta[name="csrf-token"]');
        const csrfToken = csrfTokenMeta ? csrfTokenMeta.getAttribute('content') : '';

        try {
            // Clear previous validation errors
            formElement.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
            formElement.querySelectorAll('.invalid-feedback').forEach(el => el.remove());
            const response = await fetch(formElement.action, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: formData
            });

            const json = await response.json();
            if (response.ok && json.success) {
                // Show in-page success toast
                if (window.showToast) showToast('success', 'Success!', json.message || 'Your import inquiry has been submitted successfully!');
                else alert(json.message || 'Your import inquiry has been submitted successfully!');
                // optionally reset the form
                formElement.reset();
            } else {
                // Show error
                const msg = (json && json.message) ? json.message : 'An error occurred while sending your inquiry. Please try again later.';
                if (response.status === 422 && json.errors) {
                    // show first validation error using SweetAlert or fallback
                    const firstKey = Object.keys(json.errors)[0];
                    const firstMsg = json.errors[firstKey][0];
                    if (window.showToast) showToast('error', 'Validation error', firstMsg);
                    else alert(firstMsg);
                    // mark all field errors inline
                    Object.keys(json.errors).forEach(field => {
                        const input = formElement.querySelector(`[name="${field}"]`);
                        if (input) {
                            input.classList.add('is-invalid');
                            const err = document.createElement('div');
                            err.className = 'invalid-feedback';
                            err.style = 'display:block; color:#dc3545;';
                            err.innerText = json.errors[field][0];
                            input.parentNode.appendChild(err);
                        }
                    });
                } else {
                    if (window.showToast) showToast('error', 'Error', msg);
                    else alert(msg);
                }
            }
        } catch (err) {
            console.error(err);
            if (window.showToast) showToast('error', 'Error', 'An unexpected error occurred. Please try again later.');
            else alert('An unexpected error occurred. Please try again later.');
        } finally {
            if (submitButton) { submitButton.disabled = false; submitButton.innerHTML = submitButton.dataset.original ?? 'Submit Import Inquiry'; }
        }
    });
})();

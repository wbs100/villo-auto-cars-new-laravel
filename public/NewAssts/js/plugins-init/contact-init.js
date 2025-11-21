// Contact page JS - guard event listeners for contact forms
(function () {
    function setupContactForm() {
        const form = document.getElementById('contactform');
        if (!form) return;

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(form);
            const data = {
                name: formData.get('name'),
                email: formData.get('email'),
                phone: formData.get('phone'),
                message: formData.get('message')
            };
            const subject = 'Contact Inquiry from ' + (data.name || 'Guest');
            const body = 'Name: ' + (data.name || '') + '\nEmail: ' + (data.email || '') + '\nPhone: ' + (data.phone || '') + '\n\nMessage:\n' + (data.message || '') + '\n\n--\nThis message was sent from the Villo Auto Cars contact form.';
            window.location.href = 'mailto:villoauto@gmail.com?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
        });
    }

    function setupQuickContactForm() {
        const form = document.getElementById('quickcontactform');
        if (!form) return;
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const name = form.querySelector('input[placeholder="Name*"]')?.value || '';
            const phone = form.querySelector('input[placeholder="Phone*"]')?.value || '';
            const message = form.querySelector('textarea')?.value || '';
            const subject = 'Quick Inquiry from ' + (name || 'Guest');
            const body = 'Name: ' + name + '\nPhone: ' + phone + '\n\nMessage:\n' + message + '\n\n--\nThis is a quick inquiry from Villo Auto Cars website.';
            window.location.href = 'mailto:villoauto@gmail.com?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        setupContactForm();
        setupQuickContactForm();
    });
})();

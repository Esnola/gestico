const protectedEmailSelector = '[data-protected-email]';
const contactFormSelector = '[data-contact-form]';
const minimumContactFormAge = 2500;

const reverse = (value) => value.split('').reverse().join('');

const decodeProtectedEmail = (payload) => {
    try {
        const [encodedUser, encodedDomain] = window.atob(payload).split('|');

        if (!encodedUser || !encodedDomain) {
            return null;
        }

        return `${reverse(encodedUser)}@${reverse(encodedDomain)}`;
    } catch {
        return null;
    }
};

const initializeProtectedEmailLinks = () => {
    document.querySelectorAll(protectedEmailSelector).forEach((link) => {
        const email = decodeProtectedEmail(link.dataset.protectedEmail ?? '');

        if (!email) {
            return;
        }

        link.href = `mailto:${email}`;

        link.querySelector('[data-protected-email-label]')?.replaceChildren(email);
    });
};

const showContactFormStatus = (form, message) => {
    const status = form.querySelector('[data-contact-form-status]');

    if (!status) {
        return;
    }

    status.textContent = message;
    status.classList.remove('hidden');
};

const initializeContactForms = () => {
    document.querySelectorAll(contactFormSelector).forEach((form) => {
        const startedAt = Date.now();

        form.addEventListener('submit', (event) => {
            event.preventDefault();

            const recipient = decodeProtectedEmail(form.dataset.contactRecipient ?? '');
            const formData = new FormData(form);
            const honeypot = String(formData.get('website') ?? '').trim();

            if (honeypot !== '' || Date.now() - startedAt < minimumContactFormAge || !recipient) {
                showContactFormStatus(form, 'No hemos podido preparar el mensaje. Escríbenos desde el enlace de email.');

                return;
            }

            const name = String(formData.get('name') ?? '').trim();
            const email = String(formData.get('email') ?? '').trim();
            const message = String(formData.get('message') ?? '').trim();
            const subject = encodeURIComponent(`Consulta desde la web de ${name || 'Gestico Barbanza'}`);
            const body = encodeURIComponent([
                `Nombre: ${name}`,
                `Email: ${email}`,
                '',
                message,
            ].join('\n'));

            window.location.href = `mailto:${recipient}?subject=${subject}&body=${body}`;
        });
    });
};

export const initializeProtection = () => {
    initializeProtectedEmailLinks();
    initializeContactForms();
};

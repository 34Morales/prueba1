(() => {
    const pending = new Map();
    document.querySelectorAll('.ui-error').forEach((error, index) => {
        const field = error.parentElement.querySelector('input:not([type="hidden"]), select, textarea');
        if (!field) return;
        error.id ||= 'field-error-' + index;
        field.setAttribute('aria-invalid', 'true');
        field.setAttribute('aria-describedby', [field.getAttribute('aria-describedby'), error.id].filter(Boolean).join(' '));
    });
    document.addEventListener('submit', event => {
        const form = event.target;
        if (event.defaultPrevented || form.method.toLowerCase() !== 'post') return;
        if (pending.has(form)) { event.preventDefault(); return; }
        const button = event.submitter;
        if (!button) return;
        const content = [...button.childNodes];
        pending.set(form, { button, content });
        form.setAttribute('aria-busy', 'true');
        button.setAttribute('aria-disabled', 'true');
        button.textContent = 'Processing…';
        // Keep the native submitter enabled so its value remains in the request.
    });
    window.addEventListener('pageshow', () => {
        pending.forEach(({ button, content }, form) => {
            button.replaceChildren(...content);
            button.removeAttribute('aria-disabled');
            form.removeAttribute('aria-busy');
        });
        pending.clear();
    });
})();

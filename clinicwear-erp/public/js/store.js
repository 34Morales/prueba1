(() => {
    const read = (key, fallback) => { try { return JSON.parse(localStorage.getItem(key)) ?? fallback; } catch { return fallback; } };
    const save = (key, value) => { try { localStorage.setItem(key, JSON.stringify(value)); } catch { /* Continue in memory when storage is unavailable. */ } };
    const theme = document.querySelector('.theme-toggle');
    const setTheme = value => { document.documentElement.dataset.theme = value; theme.setAttribute('aria-pressed', String(value === 'dark')); };
    setTheme(read('clinicwear-theme', matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'));
    theme.addEventListener('click', () => { const value = document.documentElement.dataset.theme === 'dark' ? 'light' : 'dark'; setTheme(value); save('clinicwear-theme', value); });
    const menuButton = document.querySelector('.store-menu-toggle');
    const navigation = document.querySelector('#store-navigation');
    const closeMenu = () => { navigation.classList.remove('is-open'); menuButton.setAttribute('aria-expanded', 'false'); };
    menuButton.addEventListener('click', () => { const open = navigation.classList.toggle('is-open'); menuButton.setAttribute('aria-expanded', String(open)); });
    document.addEventListener('keydown', event => { if (event.key === 'Escape' && navigation.classList.contains('is-open')) { closeMenu(); menuButton.focus(); } });
    matchMedia('(max-width: 760px)').addEventListener('change', closeMenu);
    let bag = read('clinicwear-bag', []);
    if (!Array.isArray(bag)) bag = [];
    bag = bag.filter(item => item && typeof item.name === 'string' && typeof item.size === 'string' && Number.isFinite(item.price) && Number.isInteger(item.quantity) && item.quantity > 0);
    const money = value => '$' + value.toFixed(2);
    const dialog = document.querySelector('.cart-dialog');
    const renderBag = () => {
        const quantity = bag.reduce((sum, item) => sum + item.quantity, 0);
        document.querySelector('[data-cart-count]').textContent = quantity;
        document.querySelector('.cart-toggle').setAttribute('aria-label', `Open shopping bag, ${quantity} ${quantity === 1 ? 'item' : 'items'}`);
        const items = document.querySelector('[data-cart-items]'); items.replaceChildren();
        if (!bag.length) {
            const empty = document.createElement('div'); empty.className = 'bag-empty';
            const title = document.createElement('strong'); title.textContent = 'Room for your next essential';
            const description = document.createElement('p'); description.textContent = 'Your bag is empty. Explore the collections and add something that fits your everyday.';
            empty.append(title, description); items.append(empty);
        }
        bag.forEach((item, index) => {
            const row = document.createElement('div'); row.className = 'bag-item';
            const name = document.createElement('strong'); name.textContent = item.name;
            const detail = document.createElement('span'); detail.textContent = `${item.size ? 'Size ' + item.size + ' · ' : ''}${item.quantity} × ${money(item.price)}`;
            const remove = document.createElement('button'); remove.type = 'button'; remove.textContent = 'Remove'; remove.setAttribute('aria-label', 'Remove ' + item.name); remove.onclick = () => { bag.splice(index, 1); save('clinicwear-bag', bag); renderBag(); };
            row.append(name, detail, remove); items.append(row);
        });
        document.querySelector('[data-cart-total]').textContent = money(bag.reduce((sum, item) => sum + item.price * item.quantity, 0));
    };
    renderBag();
    document.querySelector('.cart-toggle').onclick = () => dialog.showModal();
    document.querySelectorAll('[data-close-cart]').forEach(button => { button.onclick = () => dialog.close(); });
    let toastTimer;
    const notify = message => { const toast = document.querySelector('.toast'); toast.textContent = message; toast.classList.add('visible'); clearTimeout(toastTimer); toastTimer = setTimeout(() => toast.classList.remove('visible'), 3000); };
    const cards = [...document.querySelectorAll('.product-card')];
    const filters = [...document.querySelectorAll('.filter-bar select')];
    // Existing catalog has no size availability data; size is a selection, not an inventory filter.
    const sizeFilter = filters.find(select => select.options[0].text === 'All Sizes');
    if (sizeFilter) sizeFilter.options[0].text = 'Select size for all';
    filters.forEach(select => {
        select.setAttribute('aria-label', select.options[0].text);
        if (select.options[0].text === 'All Colors' && !cards.some(card => /navy|black|grey|wine|blue/i.test(card.querySelector('p').textContent))) {
            select.disabled = true;
            select.title = 'Color information is not available for this collection.';
        }
        if (select.options[0].text === 'All Lengths') {
            select.disabled = true;
            select.title = 'Complete length information is not available for this collection.';
        }
        if (select.options[0].text === 'Sort By') [...select.options].find(option => option.text === 'Newest')?.remove();
        const label = document.createElement('label'); label.className = 'filter-label';
        select.id = 'catalog-filter-' + filters.indexOf(select); label.htmlFor = select.id;
        label.textContent = select === sizeFilter ? 'Preferred size' : select.options[0].text.replace(/^All /, '').replace('Sort By', 'Sort products');
        select.before(label);
        if (select.disabled) { const note = document.createElement('small'); note.className = 'filter-note'; note.textContent = select.title; select.after(note); }
    });
    cards.forEach((card, index) => {
        const name = card.querySelector('h3').textContent.trim();
        const price = Number(card.querySelector('.price').textContent.replace(/[^\d.]/g, ''));
        const button = card.querySelector('button');
        if (sizeFilter) {
            const size = document.createElement('select'); size.setAttribute('aria-label', 'Choose size for ' + name); size.dataset.productSize = '';
            const placeholder = new Option('Choose size', ''); size.append(placeholder);
            [...sizeFilter.options].slice(1).forEach(option => size.add(new Option(option.text, option.text)));
            button.before(size);
        }
        button.onclick = () => {
            const size = card.querySelector('[data-product-size]');
            if (size && !size.value) { size.focus(); notify('Choose a size first.'); return; }
            const selected = size?.value || '';
            const existing = bag.find(item => item.name === name && item.size === selected && item.price === price);
            if (existing) existing.quantity++; else bag.push({ name, size: selected, price, quantity: 1 });
            save('clinicwear-bag', bag); renderBag(); notify(name + ' added to your bag.');
        };
        card.dataset.order = index;
    });
    const grid = document.querySelector('.products-grid');
    if (grid) {
        const summary = document.createElement('div'); summary.className = 'catalog-summary';
        const count = document.createElement('p'); count.setAttribute('role', 'status');
        const reset = document.createElement('button'); reset.type = 'button'; reset.className = 'catalog-reset'; reset.textContent = 'Reset filters';
        summary.append(count, reset); grid.before(summary);
        const empty = document.createElement('p'); empty.className = 'empty-state'; empty.textContent = 'No matching products. Try another search or reset the filters.'; empty.hidden = true; grid.after(empty);
        const input = document.querySelector('.search-box input');
        const filter = () => {
            const query = input.value.trim().toLowerCase();
            cards.forEach(card => {
                const text = (card.querySelector('h3').textContent + ' ' + card.querySelector('p').textContent + ' ' + (card.querySelector('.badge')?.textContent || '')).toLowerCase();
                card.hidden = !text.includes(query) || filters.some(select => {
                    if (select === sizeFilter || select.selectedIndex === 0 || select.options[0].text === 'Sort By') return false;
                    const term = select.value.toLowerCase();
                    return !text.includes(term.replace(/s$/, ''));
                });
            });
            empty.hidden = cards.some(card => !card.hidden);
            const visible = cards.filter(card => !card.hidden).length;
            count.textContent = `${visible} of ${cards.length} products`;
            reset.hidden = !query && filters.every(select => select.selectedIndex === 0);
        };
        reset.onclick = () => { input.value = ''; filters.forEach(select => { select.selectedIndex = 0; }); cards.forEach(card => { const size = card.querySelector('[data-product-size]'); if(size) size.value = ''; grid.append(card); }); filter(); };
        input.addEventListener('input', filter);
        document.querySelector('.search-box').addEventListener('submit', event => { event.preventDefault(); filter(); grid.scrollIntoView({ block: 'start' }); });
        filters.forEach(select => select.addEventListener('change', () => {
            if (select === sizeFilter) cards.forEach(card => { card.querySelector('[data-product-size]').value = select.selectedIndex ? select.value : ''; });
            if (select.options[0].text === 'Sort By') {
                const price = card => Number(card.querySelector('.price').textContent.replace(/[^\d.]/g, ''));
                [...cards].sort((a, b) => select.value === 'Lowest Price' ? price(a) - price(b) : select.value === 'Highest Price' ? price(b) - price(a) : select.value === 'Best Seller' ? Number(b.querySelector('.badge')?.textContent.includes('Best Seller')) - Number(a.querySelector('.badge')?.textContent.includes('Best Seller')) : Number(a.dataset.order) - Number(b.dataset.order)).forEach(card => grid.append(card));
            }
            filter();
        }));
        filter();
    }
    document.querySelector('.contact-form')?.addEventListener('submit', event => {
        event.preventDefault();
        const data = new FormData(event.currentTarget);
        const body = `${data.get('message')}\n\n${data.get('first-name')} ${data.get('last-name')}\n${data.get('email')}`;
        location.href = 'mailto:support@clinicwear.com?subject=' + encodeURIComponent(data.get('subject')) + '&body=' + encodeURIComponent(body);
        const feedback = document.querySelector('.contact-feedback'); feedback.hidden = false;
        feedback.textContent = 'Your email draft is ready. Complete sending in your email app. If it did not open, email support@clinicwear.com directly.';
        notify('Email prepared. Complete sending in your email app.');
    });
})();

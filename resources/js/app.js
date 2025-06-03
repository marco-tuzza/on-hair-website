import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header');
    const headerHeight = header.offsetHeight;
    let isSticky = false;
    let placeholder = null;

    function createPlaceholder() {
        placeholder = document.createElement('div');
        placeholder.style.height = `${headerHeight}px`;
        placeholder.style.display = 'none';
        header.parentNode.insertBefore(placeholder, header);
    }

    function handleScroll() {
        const scrollPosition = window.scrollY;

        if (scrollPosition > 160 && !isSticky)
        {
            header.classList.add('sticky');
            placeholder.style.display = 'block';
            isSticky = true;
        }
        else if (scrollPosition === 0 && isSticky)
        {
            header.classList.remove('sticky');
            placeholder.style.display = 'none';
            isSticky = false;
        }
    }

    createPlaceholder();
    window.addEventListener('scroll', handleScroll);

    handleScroll();
});

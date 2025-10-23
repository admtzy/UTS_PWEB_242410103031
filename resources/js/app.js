import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.card');
    cards.forEach((card, i) => {
        card.style.opacity = 0;
        setTimeout(() => {
            card.style.transition = 'opacity 0.8s ease-in-out';
            card.style.opacity = 1;
        }, i * 150);
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.grid-card');
    cards.forEach((card, index) => {
        card.style.opacity = 0;
        setTimeout(() => {
            card.style.transition = 'opacity 0.6s ease-in-out';
            card.style.opacity = 1;
        }, index * 200);
    });
});

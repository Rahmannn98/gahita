document.addEventListener("DOMContentLoaded", function() {
    const articles = document.querySelectorAll('.animate-fade-in');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-y-0');
            }
        });
    }, {
        threshold: 0.1
    });

    articles.forEach(article => observer.observe(article));
});
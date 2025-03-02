document.addEventListener("DOMContentLoaded", function() {
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-x-0');
            }
        });
    }, {
        threshold: 0.1
    });

    animatedElements.forEach(element => observer.observe(element));
});
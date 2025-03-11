// Efek Mengetik (Typing Effect)
const text = "Gahita adalah Platform Pembelajaran Kebudayaan dengan menyediakan konten pembelajaran berupa modul & video yang menarik.";
let index = 0;

function typeEffect() {
    const typingText = document.getElementById("typing-text");
    if (!typingText) return; // Hindari error jika elemen tidak ditemukan

    if (index < text.length) {
        typingText.textContent += text.charAt(index);
        index++;
        setTimeout(typeEffect, 100);
    } else {
        document.getElementById("cursor").style.display = "none";
    }
}

// Fungsi Counter (Angka Bergerak)
function startCounter() {
    const counters = document.querySelectorAll(".counter");

    counters.forEach(counter => {
        let target = +counter.getAttribute("data-target");
        let count = 0;
        let speed = target / 100;

        function updateCounter() {
            if (count < target) {
                count += speed;
                counter.textContent = Math.ceil(count);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        }
        updateCounter();
    });
}

// Reset Counter
function resetCounter() {
    document.querySelectorAll(".counter").forEach(counter => counter.textContent = "0");
    setTimeout(startCounter, 500);
}

// Animasi saat elemen masuk viewport
function animateElementsOnScroll() {
    const elements = document.querySelectorAll('.animate-on-scroll');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                entry.target.classList.add('animated');

                if (entry.target.classList.contains('animate-fade-in')) {
                    entry.target.classList.add('animate-fade-in');
                } else if (entry.target.classList.contains('animate-slide-in-left')) {
                    entry.target.classList.add('animate-slide-in-left');
                } else if (entry.target.classList.contains('animate-slide-in-right')) {
                    entry.target.classList.add('animate-slide-in-right');
                } else if (entry.target.classList.contains('animate-scale-up')) {
                    entry.target.classList.add('animate-scale-up');
                }

                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    elements.forEach(element => observer.observe(element));
}

// Jalankan semua fungsi saat halaman dimuat
window.addEventListener('load', () => {
    setTimeout(typeEffect, 500);
    startCounter();
    setInterval(resetCounter, 5000);
    animateElementsOnScroll();
});

const text = "Gahita adalah Platform Pembelajaran Kebudayaan dengan menyediakan konten pembelajaran berupa modul & video yang menarik.";
let index = 0;

function typeEffect() {
    if (index < text.length) {
        document.getElementById("typing-text").innerHTML += text.charAt(index);
        index++;
        setTimeout(typeEffect, 100); // Kecepatan typing (ms)
    } else {
        // Setelah selesai, hilangkan cursor
        document.getElementById("cursor").style.display = "none";
    }
}

// Jalankan efek typing saat halaman dimuat
window.onload = () => {
    setTimeout(typeEffect, 500); // Delay sebelum memulai efek typing
};

function startCounter() {
    const counters = document.querySelectorAll(".counter");

    counters.forEach(counter => {
        let target = +counter.getAttribute("data-target");
        let count = 0;
        let speed = target / 100; // Sesuaikan kecepatan penghitungan

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

function resetCounter() {
    const counters = document.querySelectorAll(".counter");
    counters.forEach(counter => {
        counter.textContent = "0";
    });
    setTimeout(startCounter, 500); // Mulai ulang penghitungan setelah reset
}

// Fungsi untuk menambahkan animasi saat elemen muncul di layar
function animateElementsOnScroll() {
    const elements = document.querySelectorAll('.animate-on-scroll');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                // Saat elemen masuk ke viewport, tambahkan animasi
                if (entry.target.classList.contains('animate-fade-in')) {
                    entry.target.classList.add('animate-fade-in');
                } else if (entry.target.classList.contains('animate-slide-in-left')) {
                    entry.target.classList.add('animate-slide-in-left');
                } else if (entry.target.classList.contains('animate-slide-in-right')) {
                    entry.target.classList.add('animate-slide-in-right');
                } else if (entry.target.classList.contains('animate-scale-up')) {
                    entry.target.classList.add('animate-scale-up');
                }
                observer.unobserve(entry.target); // Hentikan observasi setelah animasi dimulai
            }
        });
    }, {
        threshold: 0.1, // Mulai animasi saat 10% elemen terlihat
    });

    elements.forEach((element) => {
        observer.observe(element);
    });
}

// Jalankan fungsi saat halaman dimuat
window.addEventListener('load', animateElementsOnScroll);

// Jalankan fungsi saat halaman dimuat
window.addEventListener('load', () => {
    setTimeout(typeEffect, 500);
    startCounter();
    setInterval(resetCounter, 5000);
    animateOnScroll();
});
const text = "Gahita adalah Platform Pembelajaran Kebudayaan dengan menyediakan konten pembelajaran berupa modul & video yang menarik.";
let index = 0;

function typeEffect() {
    if (index < text.length) {
        document.getElementById("typing-text").innerHTML += text.charAt(index);
        index++;
        setTimeout(typeEffect, 100);
    } else {
      
        document.getElementById("cursor").style.display = "none";
    }
}

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

function resetCounter() {
    const counters = document.querySelectorAll(".counter");
    counters.forEach(counter => {
        counter.textContent = "0";
    });
    setTimeout(startCounter, 500);
}

function animateOnScroll() {
    const elements = document.querySelectorAll('.animate-on-scroll');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                // Saat elemen masuk ke viewport, tambahkan kelas fade-in dan hapus fade-out
                entry.target.classList.add('animate-fade-in');
                entry.target.classList.remove('animate-fade-out');
            } else {
                // Saat elemen meninggalkan viewport, tambahkan kelas fade-out dan hapus fade-in
                entry.target.classList.add('animate-fade-out');
                entry.target.classList.remove('animate-fade-in');
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
window.addEventListener('load', () => {
    animateOnScroll();
});
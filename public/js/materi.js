document.addEventListener("DOMContentLoaded", function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.getAttribute('data-category');

            // Filter produk berdasarkan kategori
            productCards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'block';
                    card.classList.add('animate-fadeIn');
                } else {
                    card.style.display = 'none';
                }
            });

            // Update warna tombol aktif
            filterButtons.forEach(btn => {
                btn.classList.remove('bg-blue-500', 'text-white');
                btn.classList.add('bg-gray-300', 'text-blue-900', 'dark:bg-gray-700', 'dark:text-white');
            });
            this.classList.remove('bg-gray-300', 'text-blue-900', 'dark:bg-gray-700', 'dark:text-white');
            this.classList.add('bg-blue-500', 'text-white');
        });
    });
});
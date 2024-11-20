 const carousel = document.getElementById('carousel');
        let scrollAmount = 0;

        function autoScroll() {
            scrollAmount += 1;
            if (scrollAmount >= carousel.scrollWidth / 2) {
                scrollAmount = 0; // Reset ke awal saat mencapai akhir
            }
            carousel.scrollLeft = scrollAmount;
            requestAnimationFrame(autoScroll);
        }

        // Memulai animasi saat halaman dimuat
        window.onload = () => {
            autoScroll();
        }
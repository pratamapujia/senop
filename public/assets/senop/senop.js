// AOS
function aosInit() {
    AOS.init({
        duration: 600,
        easing: "ease-in-out",
        once: true,
        mirror: false,
        // disable: "phone",
    });
}
window.addEventListener("load", aosInit);

// Menu Navbar
document.addEventListener("DOMContentLoaded", () => {
    // === 1. LOGIC MENU UTAMA (Toggle Hamburger) ===
    const menuBtn = document.getElementById("mobile-menu-btn");
    const menuIcon = document.getElementById("mobile-menu-icon");
    const mobileMenu = document.getElementById("mobile-menu");

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener("click", () => {
            // Toggle menu visibility
            mobileMenu.classList.toggle("hidden");

            // Ubah ikon (List <-> X)
            if (mobileMenu.classList.contains("hidden")) {
                menuIcon.classList.remove("bi-x");
                menuIcon.classList.add("bi-list");
            } else {
                menuIcon.classList.remove("bi-list");
                menuIcon.classList.add("bi-x");
            }
        });
    }

    // === 2. LOGIC SUBMENU MOBILE (Dropdown Accordion) ===
    // Ambil semua tombol yang punya class 'mobile-dropdown-toggle'
    const dropdownToggles = document.querySelectorAll(
        ".mobile-dropdown-toggle",
    );

    dropdownToggles.forEach((toggle) => {
        toggle.addEventListener("click", () => {
            // Cari elemen <ul> (submenu) tepat setelah tombol ini
            const submenu = toggle.nextElementSibling;
            // Cari ikon panah di dalam tombol
            const icon = toggle.querySelector(".bi-chevron-down");

            if (submenu) {
                // Buka/Tutup submenu
                submenu.classList.toggle("hidden");

                // Putar ikon panah
                if (!submenu.classList.contains("hidden")) {
                    icon.classList.add("rotate-180");
                } else {
                    icon.classList.remove("rotate-180");
                }
            }
        });
    });
});

// Swiper
document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper(".testimoni-swiper", {
        loop: true,
        speed: 1000, // Speed lambat agar elegan
        effect: "fade", // Fade effect wajib untuk opsi 1, opsional untuk opsi 2
        fadeEffect: {
            crossFade: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-next-custom",
            prevEl: ".swiper-prev-custom",
        },
    });
});

// Scroll To Top
document.addEventListener("DOMContentLoaded", function () {
    const progressPath = document.querySelector("#progress-path");
    const progressWrap = document.getElementById("progress-wrap");

    // 1. Hitung Panjang Jalur SVG
    const pathLength = progressPath.getTotalLength();

    // 2. Set CSS awal untuk stroke (agar kosong dulu)
    progressPath.style.transition = "none";
    progressPath.style.strokeDasharray = pathLength + " " + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect(); // Trigger layout repaint
    progressPath.style.transition = "stroke-dashoffset 10ms linear";

    // 3. Fungsi Update Progress saat Scroll
    const updateProgress = () => {
        const scroll = window.scrollY || window.pageYOffset;
        const height =
            document.documentElement.scrollHeight - window.innerHeight;
        const progress = pathLength - (scroll * pathLength) / height;

        progressPath.style.strokeDashoffset = progress;

        // Show/Hide Button logic
        if (scroll > 150) {
            progressWrap.classList.remove(
                "opacity-0",
                "invisible",
                "translate-y-4",
            );
            progressWrap.classList.add(
                "opacity-100",
                "visible",
                "translate-y-0",
            );
        } else {
            progressWrap.classList.add(
                "opacity-0",
                "invisible",
                "translate-y-4",
            );
            progressWrap.classList.remove(
                "opacity-100",
                "visible",
                "translate-y-0",
            );
        }
    };

    // 4. Event Listeners
    window.addEventListener("scroll", updateProgress);

    // 5. Click to Scroll Top (Support Lenis / Native)
    progressWrap.addEventListener("click", function (event) {
        event.preventDefault();

        // Cek jika pakai Lenis
        if (typeof Lenis !== "undefined" && window.lenis) {
            window.lenis.scrollTo(0);
        } else {
            // Fallback scroll biasa
            window.scrollTo({ top: 0, behavior: "smooth" });
        }
    });
});

// Loader Preloader
// 1. Menghilangkan Preloader saat halaman selesai dimuat
window.addEventListener("load", function () {
    const preloader = document.getElementById("preloader");
    if (preloader) {
        preloader.style.opacity = "0"; // Efek memudar
        setTimeout(() => {
            preloader.style.display = "none"; // Menghilangkan elemen dari dokumen
        }, 500); // Durasi ini menyesuaikan class 'duration-500' di HTML
    }
});

// 2. Memunculkan Preloader saat pindah halaman (klik link)
document.addEventListener("DOMContentLoaded", () => {
    const links = document.querySelectorAll("a");

    links.forEach((link) => {
        link.addEventListener("click", function (e) {
            const href = this.getAttribute("href");
            const target = this.getAttribute("target");

            // Pastikan link valid (bukan anchor #, bukan tab baru, dan bukan link kosong)
            if (
                href &&
                href !== "#" &&
                !href.startsWith("javascript") &&
                target !== "_blank"
            ) {
                const preloader = document.getElementById("preloader");
                if (preloader) {
                    preloader.style.display = "flex";
                    // Jeda tipis agar display:flex ter-render sebelum transisi opacity
                    setTimeout(() => {
                        preloader.style.opacity = "1";
                    }, 10);
                }
            }
        });
    });
});

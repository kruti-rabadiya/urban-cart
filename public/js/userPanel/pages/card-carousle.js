document.addEventListener('DOMContentLoaded', function () {

    function cardCarousel() {

        const viewports = document.querySelectorAll('.home-card-grid-section');

        viewports.forEach(viewport => {

            const carousel = viewport.querySelector('.home-card-grid');
            if (!carousel) return;

            const cards = carousel.children;
            if (!cards.length) return;

            const section = viewport.closest('.home-section-content');

            const dotsContainer = section?.querySelector('.crousel-dots');
            if (!dotsContainer) return;

            const dotsSection = section?.querySelector('.carousel-dots-section');
            const dots = dotsContainer.querySelectorAll('.carousel-dot');

            const viewportWidth = viewport.clientWidth;
            const cardWidth = cards[0].offsetWidth;

            const gap = parseInt(getComputedStyle(carousel).gap) || 0;
            const cardFullWidth = cardWidth + gap;

            const visibleCards = Math.floor(viewportWidth / cardFullWidth);

            const pages = Math.max(cards.length - visibleCards + 1, 1);

            if (pages <= 1) {
                if (dotsSection) dotsSection.style.display = "none";
                return;
            } else {
                if (dotsSection) dotsSection.style.display = "";
            }

            dots.forEach((dot, index) => {

                if (index >= pages) {
                    dot.style.display = "none";
                    return;
                }

                dot.style.display = "";
                if(carousel.scrollWidth > viewportWidth) {
                    carousel.style.paddingLeft = "4%";
                } else {
                    carousel.style.paddingLeft = "";
                }

                if (dotsContainer.offsetWidth > viewportWidth) {
                    dotsContainer.style.paddingLeft = "4%";
                } else {
                    dotsContainer.style.paddingLeft = "";
                }

                dot.replaceWith(dot.cloneNode(true));
            });

            const updatedDots = dotsContainer.querySelectorAll('.carousel-dot');

            function updateActiveDot() {

                const scrollLeft = viewport.scrollLeft;
                const currentIndex = Math.round(scrollLeft / cardFullWidth);

                updatedDots.forEach(d => d.classList.remove('active'));

                if (updatedDots[currentIndex]) {
                    updatedDots[currentIndex].classList.add('active');
                }

            }

            updatedDots.forEach((dot, index) => {

                if (index >= pages) return;

                dot.addEventListener('click', () => {

                    const scrollPosition = index * cardFullWidth;

                    viewport.scrollTo({
                        left: scrollPosition,
                        behavior: "smooth"
                    });

                });

            });

            // remove previous listener if exists
            viewport.removeEventListener("scroll", viewport._scrollHandler);

            viewport._scrollHandler = updateActiveDot;

            viewport.addEventListener("scroll", viewport._scrollHandler);

            // set initial active dot
            updateActiveDot();

        });
    }

    cardCarousel();

    window.addEventListener('resize', cardCarousel);



    // REVIEW INFINITE SCROLL
    function setupReviewCarousel() {

        const carousel = document.querySelector(".review-carousel");
        const track = document.querySelector(".review-track");
        const duplicateSets = 2;

        if (!carousel || !track) return;

        function setupCarousel() {

            const viewportWidth = carousel.offsetWidth;

            const clones = track.querySelectorAll(".review-clone");
            clones.forEach(clone => clone.remove());

            const cards = Array.from(track.children);

            const trackWidth = track.scrollWidth;

            if (trackWidth <= viewportWidth) {

                track.classList.remove("scrolling");
                return;

            }

            for (let i = 0; i < duplicateSets; i++) {
                cards.forEach(card => {

                    const clone = card.cloneNode(true);
                    clone.classList.add("review-clone");

                    track.appendChild(clone);

                });
            }

            track.classList.add("scrolling");

        }

        setupCarousel();

        window.addEventListener("resize", setupCarousel);

    }

    setupReviewCarousel();

});
function setDropdownState(toggleBtn, content, arrow, isExpanded) {
    toggleBtn.setAttribute("aria-expanded", String(isExpanded));
    content.hidden = !isExpanded;

    if (arrow) {
        arrow.style.transform = isExpanded ? "rotate(180deg)" : "rotate(0deg)";
    }
}

function setupFilterDropdown(dropdown, index) {
    const toggleBtn = dropdown.querySelector(".shop-filter-dropdown-toggle");
    const content = dropdown.querySelector(".shop-filter-dropdown-list, .shop-filter-price-list");
    const arrow = dropdown.querySelector(".shop-filter-drop-down");

    if (!toggleBtn || !content) {
        return;
    }

    const contentId = content.id || `shop-filter-content-${index + 1}`;
    content.id = contentId;
    toggleBtn.setAttribute("aria-controls", contentId);

    if (arrow) {
        arrow.style.transition = "transform 0.2s ease";
    }

    setDropdownState(toggleBtn, content, arrow, true);

    toggleBtn.addEventListener("click", () => {
        const isExpanded = toggleBtn.getAttribute("aria-expanded") === "true";
        setDropdownState(toggleBtn, content, arrow, !isExpanded);
    });
}

function initializeFilterDropdowns() {
    const filterDropdowns = document.querySelectorAll(".shop-filter-dropdown");
    filterDropdowns.forEach((dropdown, index) => {
        setupFilterDropdown(dropdown, index);
    });
}

function initializePriceRangeFilter() {
    const minSlider = document.querySelector(".min-input");
    const maxSlider = document.querySelector(".max-input");
    const minBox = document.querySelector(".min-value");
    const maxBox = document.querySelector(".max-value");
    const progress = document.querySelector(".shop-slider-progress");

    if (!minSlider || !maxSlider || !minBox || !maxBox || !progress) {
        return;
    }

    const minGap = 1000;
    const maxValue = parseInt(maxSlider.max);

    function updateSlider(e) {
        let minVal = parseInt(minSlider.value);
        let maxVal = parseInt(maxSlider.value);

        // prevent overlap
        if (maxVal - minVal < minGap) {
            if (e.target.classList.contains("min-input")) {
                minVal = maxVal - minGap;
                minSlider.value = minVal;
            } else {
                maxVal = minVal + minGap;
                maxSlider.value = maxVal;
            }
        }

        // update input boxes
        minBox.value = minVal;
        maxBox.value = maxVal;

        // update progress bar
        progress.style.left = (minVal / maxValue) * 100 + "%";
        progress.style.right = 100 - (maxVal / maxValue) * 100 + "%";
    }

    function updateBox() {
        let minVal = parseInt(minBox.value) || 0;
        let maxVal = parseInt(maxBox.value) || maxValue;

        // clamp values within range
        minVal = Math.max(0, Math.min(minVal, maxValue));
        maxVal = Math.max(0, Math.min(maxVal, maxValue));

        // enforce gap
        if (maxVal - minVal < minGap) {
            maxVal = minVal + minGap;
        }

        // update sliders
        minSlider.value = minVal;
        maxSlider.value = maxVal;

        // update UI
        updateSlider({ target: minSlider });
    }

    minSlider.addEventListener("input", updateSlider);
    maxSlider.addEventListener("input", updateSlider);

    minBox.addEventListener("change", updateBox);
    maxBox.addEventListener("change", updateBox);

    // initial setup
    updateSlider({ target: minSlider });
}

//! Mobile filter drawer logic

function initializeMobileFilterDrawer() {
    const openButton = document.querySelector(".tsf-filter-svg");
    const drawer = document.querySelector(".filter-section");
    const overlay = document.querySelector(".mobile-filter-overlay");
    const closeButton = document.querySelector(".mobile-filter-close");
    const applyButton = document.querySelector(".shop-filter-btn-apply");
    const mobileQuery = window.matchMedia("(max-width: 780px)");

    if (!openButton || !drawer || !overlay) {
        return;
    }

    function closeDrawer() {
        drawer.classList.remove("is-open");
        overlay.classList.remove("is-visible");
        document.body.classList.remove("mobile-filter-open");
        openButton.setAttribute("aria-expanded", "false");
        drawer.setAttribute("aria-hidden", "true");
        overlay.setAttribute("aria-hidden", "true");
    }

    function openDrawer() {
        if (!mobileQuery.matches) {
            return;
        }

        drawer.classList.add("is-open");
        overlay.classList.add("is-visible");
        document.body.classList.add("mobile-filter-open");
        openButton.setAttribute("aria-expanded", "true");
        drawer.setAttribute("aria-hidden", "false");
        overlay.setAttribute("aria-hidden", "false");
    }

    function syncDrawerForViewport() {
        if (mobileQuery.matches) {
            if (!drawer.classList.contains("is-open")) {
                drawer.setAttribute("aria-hidden", "true");
                overlay.setAttribute("aria-hidden", "true");
                openButton.setAttribute("aria-expanded", "false");
            }

            return;
        }

        drawer.classList.remove("is-open");
        overlay.classList.remove("is-visible");
        document.body.classList.remove("mobile-filter-open");
        openButton.setAttribute("aria-expanded", "false");
        drawer.setAttribute("aria-hidden", "false");
        overlay.setAttribute("aria-hidden", "true");
    }

    openButton.addEventListener("click", () => {
        if (drawer.classList.contains("is-open")) {
            closeDrawer();
            return;
        }

        openDrawer();
    });

    if (closeButton) {
        closeButton.addEventListener("click", closeDrawer);
    }

    if (applyButton) {
        applyButton.addEventListener("click", () => {
            if (mobileQuery.matches) {
                closeDrawer();
            }
        });
    }

    overlay.addEventListener("click", closeDrawer);

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape" && drawer.classList.contains("is-open")) {
            closeDrawer();
        }
    });

    window.addEventListener("resize", syncDrawerForViewport);
    syncDrawerForViewport();
}

document.addEventListener("DOMContentLoaded", () => {
    initializeFilterDropdowns();
    initializePriceRangeFilter();
    initializeMobileFilterDrawer();
});
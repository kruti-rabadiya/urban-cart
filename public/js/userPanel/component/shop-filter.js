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

document.addEventListener("DOMContentLoaded", () => {
    initializeFilterDropdowns();
    initializePriceRangeFilter();
});
document.addEventListener("DOMContentLoaded", () => {
    const minSlider = document.querySelector(".min-input");
    const maxSlider = document.querySelector(".max-input");
    const minBox = document.querySelector(".min-value");
    const maxBox = document.querySelector(".max-value");
    const progress = document.querySelector(".shop-slider-progress");

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
});
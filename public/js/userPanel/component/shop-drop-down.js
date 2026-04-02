document.addEventListener('DOMContentLoaded', function () {
    // Adjust dropdown width to fit the widest option
    function dropDown_width() {
        const dropDowns = document.querySelectorAll('.tsf-common-filter-dropdown');

        dropDowns.forEach(dropDown => {
            const options = dropDown.querySelectorAll('.tsf-common-filter-option');
            const selected = dropDown.querySelector('.tsf-common-filter-selected-option');

            let maxWidth = 0;

            // Create hidden measuring element
            const temp = document.createElement('span');
            temp.style.position = 'absolute';
            temp.style.visibility = 'hidden';
            temp.style.whiteSpace = 'nowrap';
            temp.style.fontSize = window.getComputedStyle(selected).fontSize;
            temp.style.fontFamily = window.getComputedStyle(selected).fontFamily;

            document.body.appendChild(temp);

            // Measure all options
            options.forEach(option => {
                temp.textContent = option.textContent;
                maxWidth = Math.max(maxWidth, temp.offsetWidth);
            });

            // Measure selected text too
            temp.textContent = selected.textContent;
            maxWidth = Math.max(maxWidth, temp.offsetWidth);

            document.body.removeChild(temp);

            // Add exact extra space (padding + icon)
            const extraSpace = 50; // safe space for padding + icon

            dropDown.style.width = (maxWidth + extraSpace) + 'px';
        });
    }

    // Open dropdown on click and close when clicking outside
    function openDropdown() {

        const dropDowns = document.querySelectorAll('.tsf-common-filter-dropdown');

        if (!dropDowns.length) return;
        // Helper to close all dropdowns
        function closeAll() {
            dropDowns.forEach(dd => {
                dd.classList.remove('active');
                const list = dd.querySelector('.tsf-common-filter-options');
                if (list) list.classList.remove('show');
            });
        }
        // Loop through each dropdown and set up event listeners
        dropDowns.forEach(dropDown => {

            const selectedOption = dropDown.querySelector('.tsf-common-filter-selected-option');
            const optionList = dropDown.querySelector('.tsf-common-filter-options');

            if (!selectedOption || !optionList) return;

            selectedOption.addEventListener('click', function (event) {
                event.stopPropagation();

                const isOpen = optionList.classList.contains('show');

                // close others first
                closeAll();

                if (!isOpen) {
                    optionList.classList.add('show');
                    dropDown.classList.add('active');
                }
            });

        });

        // ONE global listener (not inside loop)
        document.addEventListener('click', function () {
            closeAll();
        });
    }

    // Handle option selection
    function selectOption() {
        const dropDowns = document.querySelectorAll('.tsf-common-filter-dropdown');

        dropDowns.forEach(dropDown => {
            const options = dropDown.querySelectorAll('.tsf-common-filter-option');
            const optionList = dropDown.querySelector('.tsf-common-filter-options');

            options.forEach(option => {
                option.addEventListener('click', function (e) {
                    e.stopPropagation();

                    // ❗ REMOVE old selected
                    options.forEach(opt => opt.classList.remove('selected'));

                    // ✅ ADD new selected
                    this.classList.add('selected');

                    // close dropdown
                    optionList.classList.remove('show');
                    dropDown.classList.remove('active');
                });
            });
        });
    }
    
    // Update the selected text in the dropdown when an option is clicked
    function updateSelectedText() {
        const dropDowns = document.querySelectorAll('.tsf-common-filter-dropdown');

        dropDowns.forEach(dropDown => {
            const options = dropDown.querySelectorAll('.tsf-common-filter-option');
            const selectedText = dropDown.querySelector('.tsf-common-filter-option-text');

            options.forEach(option => {
                option.addEventListener('click', function () {
                    selectedText.textContent = this.textContent;
                });
            });
        });
    }

    window.addEventListener('load', dropDown_width);
    window.addEventListener('resize', dropDown_width);

    dropDown_width();
    openDropdown();
    selectOption();
    updateSelectedText();
});
document.addEventListener('DOMContentLoaded', function () {

    /* ================= DESKTOP DROPDOWN ================= */
    function NavDropdown() {
        const shopLink = document.querySelector('.dropdown-toggle');

        if (shopLink) {
            const dropdown = shopLink.closest('.dropdown');
            const megaMenu = dropdown.querySelector('.mega-menu');

            shopLink.addEventListener('click', function (e) {
                e.preventDefault();
                dropdown.classList.toggle('active');
            });

            megaMenu.addEventListener('mouseleave', function () {
                dropdown.classList.remove('active');
            });

            document.addEventListener('click', function (e) {
                if (!dropdown.contains(e.target)) {
                    dropdown.classList.remove('active');
                }
            });
        }
    }
    NavDropdown();

    /* ================= HAMBURGER ================= */

    function HamburgerMenu() {
        const hamburgerIcon = document.querySelector('header .nav-hamburger');
        const hamburgerMenu = document.querySelector('header .hamburger-menu');
        const hamCross = document.querySelector('.ham-cross');
        const hamdropdown = document.querySelector('header .ham-drop-down');
        const hamDropdownMenu = document.querySelector('.ham-mega-menu');
        if(hamdropdown)
        hamdropdown.addEventListener('click', function () {
            hamDropdownMenu.classList.toggle('active');
        
        });
        if (hamCross) {
            hamburgerIcon.addEventListener('click', function () {
                hamburgerMenu.classList.toggle('active');
            });

            hamCross.addEventListener('click', function () {
                hamburgerMenu.classList.remove('active');
            });
        }
    }
    HamburgerMenu();



});

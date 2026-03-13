<footer>
    <div class="upperfooter">
        <div class="footer-logo-content">
            <div class="footer-logo">
                <h1>Urban.co</h1>
            </div>
            <div class="footer-logo-para">
                <p>Crafted essentials for everyday confidence.</p>
                <div class="footer-logo-social">
                    <a href="#"><img src="{{asset('svgs/instagram.svg')}}" alt="Instagram"></a>
                    <a href="#"><img src="{{asset('svgs/twitter.svg')}}" alt="Twitter"></a>
                    <a href="#"><img src="{{asset('svgs/facebook.svg')}}" alt="Facebook"></a>
                </div>
            </div>
        </div>
        <div class="footer-links-section">
            <div class="footer-links">
                <h3>Shop</h3>
                @for ($i = 1; $i <= 6; $i++)
                    <a href="#">Category {{ $i }}</a>
                @endfor
            </div>
            <div class="footer-links">
                <h3>Account</h3>
                <a href="#">My Account</a>
                <a href="#">Orders</a>
                <a href="#">Wishlist</a>
                <a href="#">Cart</a>
                <a href="#">Login / Register</a>
            </div>
            <div class="footer-links">
                <h3>Support</h3>
                <a href="#">Contact Us</a>
                <a href="#">Shipping Policy</a>
                <a href="#">Return Policy</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
    <div class="lowerfooter">
        <p>&copy; {{ date('Y') }} Urban.co. All rights reserved.</p>
        <div class="footer-payment-methods" aria-label="Payment Methods">
            <span><img src="{{asset('svgs/visa.svg')}}" alt="VISA"></span>
            <span><img src="{{asset('svgs/master-card.svg')}}" alt="Mastercard"></span>
            <span><img src="{{asset('svgs/rupay.svg')}}" alt="RuPay"></span>
            <span><img src="{{asset('svgs/upi.svg')}}" alt="UPI"></span>
        </div>
    </div>
</footer>

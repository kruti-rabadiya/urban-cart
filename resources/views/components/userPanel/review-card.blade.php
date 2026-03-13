
<div class="review-card">
    <div class="review-card-header">
        <h2>Sarah M.</h2>
        <div class="review-card-rating">
            @php
                $reviewRating = 4.3;
                $percentage = ($reviewRating / 5) * 100;
            @endphp

            <div class="review-star-rating">
                <div class="review-stars-empty">★★★★★</div>
                <div class="review-stars-fill" style="width: {{ $percentage }}%;">★★★★★</div>
            </div>
        </div>
    </div>

    <div class="review-card-body">
        <p>
            Great quality and perfect fit. The fabric feels premium and
            it looks even better in person.
        </p>
    </div>

    <div class="review-card-footer">
        <span>Verified Buyer</span>
        <span>2 days ago</span>
    </div>
</div>

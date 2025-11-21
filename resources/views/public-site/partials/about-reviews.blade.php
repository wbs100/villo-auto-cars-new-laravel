<!-- About Reviews Partial -->
<section class="customer-reviews-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="">
                <x-components.section-header
                    :subtitle="'What Our Kandy Customers Say About Us'"
                    title="CUSTOMER REVIEWS"
                />
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 review-col">
                <x-components.review-card
                    image="{{ asset('NewAssts/media/gridImg/1_1.webp') }}"
                    avatar="{{ asset('NewAssts/media/avatar_reviews/1.jpg') }}"
                    name="Nishani Rathnayake"
                    title="Doctor, Kandy General Hospital"
                    text="Excellent service and genuine spare parts availability. I've been a loyal customer for 5 years and wouldn't go anywhere else for my automotive needs."
                />
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 review-col">
                <x-components.review-card
                    image="{{ asset('NewAssts/media/gridImg/1_2.webp') }}"
                    avatar="{{ asset('NewAssts/media/avatar_reviews/2.jpg') }}"
                    name="Pradeep Jayasuriya"
                    title="Business Owner, Kandy"
                    text="Villo Auto Cars helped me find the perfect Toyota Corolla for my family. Their service was exceptional, and the financing was very competitive. Highly recommended!"
                />
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 review-col">
                <x-components.review-card
                    image="{{ asset('NewAssts/media/gridImg/2_1.webp') }}"
                    avatar="{{ asset('NewAssts/media/avatar_reviews/3.jpg') }}"
                    name="Samantha De Silva"
                    title="Teacher, Peradeniya"
                    text="I purchased my Honda Vezel from Villo Auto Cars last year. The entire process was smooth and transparent. Their after-sales service is outstanding!"
                />
            </div>
        </div>
    </div>
</section>

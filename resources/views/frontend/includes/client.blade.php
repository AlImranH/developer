<div class="content-block" id="testimonials">
    <header class="block-heading cleafix text-center">
        <h1>What Clients Say</h1>
        <!-- <p>Lorem Ipsum Text</p> -->
    </header>
    <div class="block-content text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="owl-carousel">
                        @foreach ($reviews as $review)
                        <div class="owl-item">
                            <div class="testimonial">
                                <img alt="Client Photo" src="{{ Storage::url($review->image) }}">
                                <p>{{ $review->reviews }}</p>
                                <strong>{{ $review->name }}</strong><br>
                                <span>{{ $review->designation }}</span>
                            </div>
                        </div>	<!-- owl-item -->
                        @endforeach
                    </div>	<!-- owl-carousel -->
                </div>	<!-- col-md-12 -->
            </div>	<!-- row -->
        </div>	<!-- container -->
    </div>	<!-- block-content -->
</div>	<!-- content-block -->
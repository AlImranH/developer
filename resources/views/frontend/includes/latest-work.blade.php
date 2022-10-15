<div class="content-block text-center" id="portfolio">
    <header class="block-heading cleafix">
        <h1>Latest Works</h1>
        <!-- <p>Take a look at some of my recent products</p> -->
    </header>

    <div class="isotope portfolio-items">
        @foreach ($portfolios as $portfolio)
        <div class="element-item grid">
            <div class="effect-zoe">
                <img class="img-responsive" alt="Portfolio" src="{{ Storage::url($portfolio->image) }}">
                <figcaption>
                    <h2 class="hidden-xs">{{ $portfolio->job_name }}</h2>
                    <p class="icon-links">
                        <a href="{{ $portfolio->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="{{ $portfolio->dribbble }}" target="_blank"><i class="fa fa-dribbble"></i></a>
                        <a href="{{ $portfolio->pinterest }}" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </p>
                </figcaption>
            </div>
        </div>
        @endforeach
        
    </div>	<!-- isotope portfolio-items -->
    <a href="#" class="btn btn-lg btn-view">
        <i class="fa fa-eye"></i>
        <span>View All</span>
    </a>
</div>  <!-- content-block -->
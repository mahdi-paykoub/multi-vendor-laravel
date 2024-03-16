<!--landing-->
<header>
    <div class="custom-landing-container mx-auto">
        <div class="swiper mySwiper slider-swiper landing-carousel">
            <div class="swiper-wrapper">
                @if (count($mainSliders) != 0)
                @foreach ($mainSliders as $mainSlider)

                <div class="swiper-slide">
                    <img src="{{json_decode($mainSlider['value'])->img}}" class="d-block w-100" alt="...">
                </div>
                @endforeach
                @endif
            </div>
            <div class="landing-next-btn d-none d-lg-block">
                <svg stroke="currentColor" class="icon-dark-color position-absolute m-auto" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
            </div>
            <div class="landing-prev-btn d-none d-lg-block">
                <svg stroke="currentColor" class="icon-dark-color position-absolute m-auto" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</header>
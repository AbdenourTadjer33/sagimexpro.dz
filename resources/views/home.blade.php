<x-layout>
    <x-slot:title>
        _
    </x-slot:title>
    @php
        $imgs = [
            '/assets/costumers/ooredoo.png',
            '/assets/costumers/dz-telecom.png',
            '/assets/costumers/caat.png',
            '/assets/costumers/xerox.png',
            '/assets/costumers/BNA.jpg',
            '/assets/costumers/minister-com.png',
            '/assets/costumers/AGB.png',
        ];
    @endphp

    <div id="hero-banner" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero-banner" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#hero-banner" data-bs-slide-to="1"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <x-carousel-background url="{{ asset('/assets/banners/ban.jpg') }}" />

                <div class="carousel-caption" id="caption-wrap">
                    <div class="d-flex justify-content-center" id="first-caption">
                        <div>
                            <span class="span-1"><?= trans('app.HeroBanner.slide1.t1') ?></span>
                        </div>
                        <div class="d-flex flex-column" id="nd-item">
                            <span class="span-2"><?= trans('app.HeroBanner.slide1.t2') ?></span>
                            <span class="span-3"><?= trans('app.HeroBanner.slide1.t3') ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <x-carousel-background url="{{ asset('/assets/banners/ban-2.jpg') }}" />

                <div class="carousel-caption">
                    <h2 class="fw-bold text-white"><?= trans('app.HeroBanner.slide2.t1') ?></h2>
                    <p><?= trans('app.HeroBanner.slide2.t2') ?></p>
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-banner" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-banner" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="container-fluid mt-5 pt-5 text-center">
        <x-section-about />
    </div>

    <div class="text-center" style="overflow: hidden;">
        <div class="row">
            <div class="col-md-12 pb-3">
                <h4><?= trans('app.SectionTestimonials.sectionHeader.first') ?></h4>
                <h4><?= trans('app.SectionTestimonials.sectionHeader.second') ?></h4>
            </div>
        </div>

        <div class="logos my-5 ">
            <div class="logos-slide">
                @foreach ($imgs as $img)
                    <img src="<?= $img ?>">
                @endforeach
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-md-12">
                <h5><?= trans('app.SectionTestimonials.sectionFooter.first') ?><br>
                    <?= trans('app.SectionTestimonials.sectionFooter.second') ?></h5>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 pt-5 text-center">
        <x-section-contact-us />
        <x-section-our-contact />
    </div>

    <script type="module" src="/assets/js/home.js"></script>
</x-layout>

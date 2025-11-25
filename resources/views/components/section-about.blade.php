<div class="mb-5 hover-line-animate" id="section-about">
    <div class="mb-3 " id="title-about">
        <h1 class="fw-bold">{{ trans('app.SectionAbout.titleSection') }}</h1>
        <div class="heading-line"></div>
    </div>

    <div class="row d-flex align-items-center py-2" id="content-about">
        <div class="col-lg-6 pb-3">
            <div class="shadow" id="img-about"
                style="
          background-image: linear-gradient(rgba(28, 34, 63, 0.40), rgba(28, 34, 63, 0.40)), url({{ asset('/assets/about.jpg') }});
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          width: 100%;
          height: 50vh;
          margin: 0 auto;
          border-radius: 10px;
        ">
            </div>
        </div>
        <div class="col-lg-6 text-start">
            <p>
                <strong><?= trans('app.SectionAbout.bodySection.first') ?> </strong>
                <?= trans('app.SectionAbout.bodySection.second') ?>
            </p>
        </div>
    </div>
</div>

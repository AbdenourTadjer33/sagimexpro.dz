<div class="mb-5 hover-line-animate">
    <div class="mb-3" id="title-contact">
        <h1 class="fw-bold">{{ trans('app.SectionContactUs.titleSection') }}</h1>
        <div class="heading-line"></div>
    </div>

    <div class="row">
        <span class="col-lg-3"></span>
        <p class="col">{{ trans('app.SectionContactUs.bodySection') }}</p>
        <span class="col-lg-3"></span>
    </div>

    <!-- form code -->
    <form class="form-contact form mx-auto px-4 py-3 mt-3 rounded shadow">
        <div class="my-3">
            <input 
                class="form-control" 
                type="text" 
                name="fname" 
                id="fname"
                placeholder="{{ trans('app.SectionContactUs.formHolder.fName') }}"
            >
            <div class="error-feedback fname"></div>
        </div>

        <div class="my-3">
            <input 
                class="form-control" 
                type="text" 
                name="lname" 
                id="lname"
                placeholder="{{ trans('app.SectionContactUs.formHolder.lName') }}"
            >
            <div class="error-feedback lname"></div>
        </div>

        <div class="my-3">
            <div class="input-group">
                <input 
                    class="form-control" 
                    type="text" 
                    name="company" 
                    id="company"
                    placeholder="{{ trans('app.SectionContactUs.formHolder.company.name') }}"
                >
                <span class="input-group-text">
                    {{ trans('app.SectionContactUs.formHolder.company.state') }}
                </span>
            </div>
            <div class="error-feedback company"></div>
        </div>

        <div class="my-3">
            <input 
                class="form-control" 
                type="email" 
                name="email" 
                id="email"
                placeholder="{{ trans('app.SectionContactUs.formHolder.email') }}"
            >
            <div class="error-feedback email"></div>
        </div>

        <div class="my-3">
            <textarea 
                name="comment" 
                id="comment"
                class="form-control"
                placeholder="{{ trans('app.SectionContactUs.formHolder.object') }}"
            ></textarea>
            <div class="error-feedback comment"></div>
        </div>

        <button type="submit" class="btn btn-primary btn-pr text-light">
            {{ trans('app.SectionContactUs.btn') }}
        </button>
    </form>

    <script type="module" src="/assets/js/contact-form.js"></script>
</div>

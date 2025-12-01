<div class="my-5 container-fluid py-5">
    <div class="row d-flex align-items-start" id="section-our-contact">

        {{-- Local Contact --}}
        <div class="contact-item col-md-4 py-2 fade-in-left">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="#1c223f" viewBox="0 0 24 24" width="75" height="75">
                    <path d="M12,6a4,4,0,1,0,4,4A4,4,0,0,0,12,6Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,12Z" />
                    <path
                        d="M12,24a5.271,5.271,0,0,1-4.311-2.2c-3.811-5.257-5.744-9.209-5.744-11.747a10.055,10.055,0,0,1,20.11,0c0,2.538-1.933,6.49-5.744,11.747A5.271,5.271,0,0,1,12,24ZM12,2.181a7.883,7.883,0,0,0-7.874,7.874c0,2.01,1.893,5.727,5.329,10.466a3.145,3.145,0,0,0,5.09,0c3.436-4.739,5.329-8.456,5.329-10.466A7.883,7.883,0,0,0,12,2.181Z" />
                </svg>
            </div>

            <h4 class="pt-3">{{ trans('app.SectionOurContact.local.title') }}</h4>

            <address>
                {{ trans('app.SectionOurContact.local.text.t1') }} <br>
                {{ trans('app.SectionOurContact.local.text.t2') }}
            </address>
        </div>

        {{-- Reseau Contact --}}
        <div style="z-index: 1" class="contact-item col-md-4 py-2 fade-in-bottom">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="#1c223f" viewBox="0 0 24 24" width="75" height="75">
                    <path
                        d="M23.98,2.023v4a1,1,0,0,1-2,0V3.46l-5.3,5.272a1,1,0,0,1-1.41-1.418L20.59,2.023H17.98a1,1,0,0,1,0-2h4A2,2,0,0,1,23.98,2.023Zm-.905,14.739a3.1,3.1,0,0,1,0,4.378l-.912,1.05c-8.191,7.838-28.12-12.085-20.4-20.3l1.149-1A3.085,3.085,0,0,1,7.241.928c.03.031,1.883,2.439,1.883,2.439a3.1,3.1,0,0,1-.006,4.281L7.959,9.105A12.781,12.781,0,0,0,14.89,16.05l1.465-1.165a3.1,3.1,0,0,1,4.28-.006S23.044,16.732,23.075,16.762ZM21.7,18.216s-2.393-1.842-2.424-1.872a1.1,1.1,0,0,0-1.549,0c-.027.026-2.044,1.634-2.044,1.634a1,1,0,0,1-.979.152A15,15,0,0,1,5.88,9.318a1,1,0,0,1,.145-.995S7.632,6.306,7.659,6.279a1.1,1.1,0,0,0,0-1.549C7.629,4.7,5.787,2.306,5.787,2.306a1.1,1.1,0,0,0-1.51.038l-1.149,1C-2.516,10.126,14.757,26.442,20.7,20.826l.912-1.05A1.12,1.12,0,0,0,21.7,18.216Z" />
                </svg>
            </div>

            <h4 class="pt-3">{{ trans('app.SectionOurContact.reseau.title') }}</h4>

            <p>
                {{ trans('app.SectionOurContact.reseau.text.t2') }} <br>
                {{ trans('app.SectionOurContact.reseau.text.t1') }}
            </p>
        </div>

        {{-- Pro Contact --}}
        <div class="contact-item col-md-4 py-2 fade-in-right">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="#1c223f" viewBox="0 0 24 24" width="75" height="75">
                    <path
                        d="M19,1H5A5.006,5.006,0,0,0,0,6V18a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V6A5.006,5.006,0,0,0,19,1ZM5,3H19a3,3,0,0,1,2.78,1.887l-7.658,7.659a3.007,3.007,0,0,1-4.244,0L2.22,4.887A3,3,0,0,1,5,3ZM19,21H5a3,3,0,0,1-3-3V7.5L8.464,13.96a5.007,5.007,0,0,0,7.072,0L22,7.5V18A3,3,0,0,1,19,21Z" />
                </svg>
            </div>

            <h4 class="pt-3">{{ trans('app.SectionOurContact.pro.title') }}</h4>

            <a href="mailto:sagimexpro.distribution@gmail.com">
                {{ trans('app.SectionOurContact.pro.text') }}
            </a>
        </div>
    </div>

    {{-- Footer Social Links --}}
    @include('components.social-links', [
        'class' => 'm-auto mt-4',
        'id' => '',
        'dataTodisplay' => trans('app.SectionOurContact.footerSection')
    ])
</div>

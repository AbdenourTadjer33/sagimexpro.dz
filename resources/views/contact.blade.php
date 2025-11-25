<x-layout>
    <x-slot:title>
        _
    </x-slot:title>
    <div className="mb-5 container-maps">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3196.7568318986164!2d2.975921174831652!3d36.7524074722608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb1c862ea1131%3A0x7c0dfda4c7b21b23!2sSagimex%20Pro!5e0!3m2!1sfr!2sdz!4v1690212806720!5m2!1sfr!2sdz"
            height="450" allowFullScreen="" loading="lazy" class="w-100" referrerPolicy="no-refrrer-when-downgrade"
            title="sagimex position on GPS"></iframe>
    </div>
    <div class="container-fluid text-center mt-4">
        <x-section-contact-us />
        <x-section-our-contact />
    </div>

    <script type="module" src="{{ asset('/assets/js/contact.js') }}"></script>
</x-layout>

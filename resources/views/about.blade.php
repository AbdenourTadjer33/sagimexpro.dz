<x-layout>
    <x-slot:title>
        {{ trans('app.Header.about') }}
    </x-slot:title>
    <div class="container-fluid pt-5 text-center">
        <x-section-about />
    </div>
</x-layout>

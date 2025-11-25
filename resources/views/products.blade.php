<x-layout>
    <x-slot:title>
        {{ trans('app.Header.product') }}
    </x-slot:title>

    @foreach ($listOfProducts as $list)
        <div>
            <div class="wrapper-cat p-2 my-2 w-75" style="background: #ede8d0;border-radius: 0 1rem 1rem 0">
                <h4>
                    {{ $list['category'] }}
                </h4>
                <ul>
                    @foreach ($list['products'] as $product)
                        <div>
                            <li>
                                {{ $product['name_' . app()->getLocale()] }}
                            </li>
                        </div>
                    @endforeach
                </ul>
            </div>

            <div class="container-fluid d-flex flex-wrap justify-content-center py-3 gap-3">
                @foreach ($list['products'] as $product)
                    @php
                        $locale = app()->getLocale();
                        $title = $product['name_' . $locale];
                        $description = $product['description_' . $locale];
                        $description = str_replace("\\n", '<br>', $description);
                        $img = $product['img'];

                    @endphp
                    <div class="card-prd">
                        <div class="title-card">
                            <h6>{{ $title }}</h6>
                        </div>
                        <div class="image-prd"
                            style="background: linear-gradient(rgba(28, 34, 63, 0.3), rgba(165, 138, 19, 0.25)) , url(/{{$img}})">
                        </div>

                        <article class="py-2 description-card">
                            <p>
                                {!! $description !!}
                            </p>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</x-layout>

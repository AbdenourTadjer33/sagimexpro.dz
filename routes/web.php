<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::middleware(SetLocale::class)->group(function () {
    Route::view('/', 'home', []);

    Route::view('/contact-us', 'contact', []);

    Route::get('/products', function () {

        $lang = app()->getLocale(); // or use $_ENV['lang'] if you want

        $products = DB::table('products')->get()->map(function ($item) {
            return (array) $item; // convert each stdClass to array
        })->toArray();

        // 2. Get distinct categories
        $categories = DB::table('products')
            ->select('category_' . $lang . ' as category')
            ->distinct()
            ->pluck('category')
            ->toArray(); // get array of category names

        // 3. Group products by category
        $listOfProducts = [];
        foreach ($categories as $category) {
            $listOfProducts[] = [
                'category' => $category,
                'products' => array_values(array_filter($products, function ($item) use ($category, $lang) {
                    return $item['category_' . $lang] == $category;
                })),
            ];
        }

        return view('products', ['listOfProducts' => $listOfProducts]);
    });

    Route::view('/about-us', 'about', []);
});

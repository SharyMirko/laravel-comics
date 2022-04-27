<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config('comics');
    $dati = [
        'comics' => $comics,
        'footer' => [
           'comic' => [
                [
                    'link' => '#',
                    'text' => 'Characters'
                ],
                [
                    'link' => '#',
                    'text' => 'Comics'
                ],
                [
                    'link' => '#',
                    'text' => 'Movies'
                ],
                [
                    'link' => '#',
                    'text' => 'TV'
                ],
                [
                    'link' => '#',
                    'text' => 'Games'
                ],
                [
                    'link' => '#',
                    'text' => 'Videos'
                ],
                [
                    'link' => '#',
                    'text' => 'News'
                ],
            ],
            'dc' => [
                [
                    'link' => '#',
                    'text' => 'Terms of Use'
                ],
                [
                    'link' => '#',
                    'text' => 'Privacy Policy (New)'
                ],
                [
                    'link' => '#',
                    'text' => 'Ad Choices'
                ],
                [
                    'link' => '#',
                    'text' => 'Advertising'
                ],
                [
                    'link' => '#',
                    'text' => 'Jobs'
                ],
                [
                    'link' => '#',
                    'text' => 'Subscriptions'
                ],
                [
                    'link' => '#',
                    'text' => 'CPSC Certificates'
                ],
                [
                    'link' => '#',
                    'text' => 'Ratings'
                ],
                [
                    'link' => '#',
                    'text' => 'Shop Help'
                ],
                [
                    'link' => '#',
                    'text' => 'Contact Us'
                ],
            ],
            'sites' => [
                [
                    'link' => '#',
                    'text' => 'DC'
                ],
                [
                    'link' => '#',
                    'text' => 'DC UNIVERSE INFINITE'
                ],
                [
                    'link' => '#',
                    'text' => 'DC Kids'
                ],
                [
                    'link' => '#',
                    'text' => 'DC Shop'
                ],
                [
                    'link' => '#',
                    'text' => 'MAD Magazine'
                ],
            ],
            'shop' => [
                [
                    'link' => '#',
                    'text' => 'Shop DC'
                ],
                [
                    'link' => '#',
                    'text' => 'Shop DC Collectibles'
                ],
            ]
        ]
    ];
    return view('home', $dati);
});

Route::get('/comics', function () {
    return view('comics');
});


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $data = [
            "navLinks" => [
                [
                    "name" => "characters",
                ],
                [
                    "name" => "comics",
                ],
                [
                    "name" => "movies",
                ],
                [
                    "name" => "tv",
                ],
                [
                    "name" => "games",
                ],
                [
                    "name" => "collectibles",
                ],
                [
                    "name" => "videos",
                ],
                [
                    "name" => "fans",
                ],
                [
                    "name" => "news",
                ],
                [
                    "name" => "shop",
                ]
            ],
            "footerLinks" => [
                [
                    "title" => "DC comics",
                    "subheading" => [
                        "Characters",
                        "Comics",
                        "Movies",
                        "TV",
                        "Games",
                        "Videos",
                        "News",
                    ]
                ],
                [
                    "title" => "Shop",
                    "subheading" => [
                        "Shop DC",
                        "Shop DC collectibles",
                    ]
                ],
                [
                    "title" => "DC",
                    "subheading" => [
                        "Terms Of Use",
                        "Privacy policy (New)",
                        "Ad Choices",
                        "Advertising",
                        "Jobs",
                        "Subscriptions",
                        "Talent Workshops",
                        "CPSC Certificates",
                        "Ratings",
                        "Shop Help",
                        "Contact Us",
                    ]
                ],
                [
                    "title" => "Sites",
                    "subheading" => [
                        "DC",
                        "MAD Magazine",
                        "DC Kids",
                        "DC Universe",
                        "DC Power Visa",
                    ]
                ]
            ],
            "bannerLinks" => [
                [
                    "name" => "digital comics",
                    "srcImg" => "img/buy-comics-digital-comics.png",
                ],
                [
                    "name" => "dc merchandise",
                    "srcImg" => "img/buy-comics-merchandise.png",
                ],
                [
                    "name" => "subscriptions",
                    "srcImg" => "img/buy-comics-subscriptions.png",
                ],
                [
                    "name" => "comic shop locator",
                    "srcImg" => "img/buy-comics-shop-locator.png",
                ],
                [
                    "name" => "dc power visa",
                    "srcImg" => "img/buy-dc-power-visa.svg",
                ]
            ],
            "comicsList" => Comic::all(),
        ];

        return view('comics.index', $data);
    }

    public function show($id)
    {
        $data = [
            "navLinks" => [
                [
                    "name" => "characters",
                ],
                [
                    "name" => "comics",
                ],
                [
                    "name" => "movies",
                ],
                [
                    "name" => "tv",
                ],
                [
                    "name" => "games",
                ],
                [
                    "name" => "collectibles",
                ],
                [
                    "name" => "videos",
                ],
                [
                    "name" => "fans",
                ],
                [
                    "name" => "news",
                ],
                [
                    "name" => "shop",
                ]
            ],
            "footerLinks" => [
                [
                    "title" => "DC comics",
                    "subheading" => [
                        "Characters",
                        "Comics",
                        "Movies",
                        "TV",
                        "Games",
                        "Videos",
                        "News",
                    ]
                ],
                [
                    "title" => "Shop",
                    "subheading" => [
                        "Shop DC",
                        "Shop DC collectibles",
                    ]
                ],
                [
                    "title" => "DC",
                    "subheading" => [
                        "Terms Of Use",
                        "Privacy policy (New)",
                        "Ad Choices",
                        "Advertising",
                        "Jobs",
                        "Subscriptions",
                        "Talent Workshops",
                        "CPSC Certificates",
                        "Ratings",
                        "Shop Help",
                        "Contact Us",
                    ]
                ],
                [
                    "title" => "Sites",
                    "subheading" => [
                        "DC",
                        "MAD Magazine",
                        "DC Kids",
                        "DC Universe",
                        "DC Power Visa",
                    ]
                ]
            ],
            "bannerLinks" => [
                [
                    "name" => "digital comics",
                    "srcImg" => "img/buy-comics-digital-comics-2.png",
                ],
                [
                    "name" => "dc merchandise",
                    "srcImg" => "img/buy-comics-merchandise-2.png",
                ],
                [
                    "name" => "subscriptions",
                    "srcImg" => "img/buy-comics-subscriptions-2.png",
                ],
                [
                    "name" => "comic shop locator",
                    "srcImg" => "img/buy-comics-shop-locator-2.png",
                ],
                [
                    "name" => "dc power visa",
                    "srcImg" => "img/buy-dc-power-visa-2.png",
                ]
            ],
            "comic" => Comic::find($id),
        ];

        return view('comics.show', $data);
    }

    public function create()
    {
        $data = [
            "navLinks" => [
                [
                    "name" => "characters",
                ],
                [
                    "name" => "comics",
                ],
                [
                    "name" => "movies",
                ],
                [
                    "name" => "tv",
                ],
                [
                    "name" => "games",
                ],
                [
                    "name" => "collectibles",
                ],
                [
                    "name" => "videos",
                ],
                [
                    "name" => "fans",
                ],
                [
                    "name" => "news",
                ],
                [
                    "name" => "shop",
                ]
            ],
            "footerLinks" => [
                [
                    "title" => "DC comics",
                    "subheading" => [
                        "Characters",
                        "Comics",
                        "Movies",
                        "TV",
                        "Games",
                        "Videos",
                        "News",
                    ]
                ],
                [
                    "title" => "Shop",
                    "subheading" => [
                        "Shop DC",
                        "Shop DC collectibles",
                    ]
                ],
                [
                    "title" => "DC",
                    "subheading" => [
                        "Terms Of Use",
                        "Privacy policy (New)",
                        "Ad Choices",
                        "Advertising",
                        "Jobs",
                        "Subscriptions",
                        "Talent Workshops",
                        "CPSC Certificates",
                        "Ratings",
                        "Shop Help",
                        "Contact Us",
                    ]
                ],
                [
                    "title" => "Sites",
                    "subheading" => [
                        "DC",
                        "MAD Magazine",
                        "DC Kids",
                        "DC Universe",
                        "DC Power Visa",
                    ]
                ]
            ]
        ];

        return view("comics.create", $data);
    }

    public function store(Request $request)
    {
        // Inseirsco la validazione dei dati
        $data = $request->validate([
            "title" => "required|string|max:100",
            "description" => "nullable|string",
            "thumb" => "required|string|max:600",
            "price" => "required|numeric|max:9999999.99",
            "series" => "nullable|string|max:100",
            "sale_date" => "required|date|after:today",
            "type" => "nullable|string|max:100",
            "artists" => "required|string",
            "writers" => "required|string",
        ]);

        $newComic = new Comic(); // creo una nuova istanza del model

        // Salvo i dati immessi con il form
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route("comics.index"); // reindirizzo l'utente alla index con tutti i comics
    }
}

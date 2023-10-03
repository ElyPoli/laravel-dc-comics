<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\UpdateComicsRequest;

class ComicController extends Controller
{
    // Leggo i dati dalla tabella del db e li passo alla view
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
            "comicsList" => Comic::all(), // reucupero dalla tabella del db tutti i dati
        ];

        return view('comics.index', $data);
    }

    // Dato l'id specificato dall'utente ritorna alla view solo i dati di quello specifico elemento
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
            "comic" => Comic::find($id), // trovo il comic con quello specifico id
        ];

        return view('comics.show', $data);
    }

    // Ritorna una pagina in cui ci sarà un form da compilare
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

    // Leggo i dati inviati dal form, creo una nuova istanza del model e dopo aver associato i dati li salvo nel db e reindirizzo l'utente su un'altra pagina
    public function store(UpdateComicsRequest $request)
    {
        // Inseirsco la validazione dei dati (è necessario inserire tutte le colonne che voglio popolare)
        $data = $request->validate();

        $data["artists"] = explode(",", $data["artists"]);
        $data["writers"] = explode(",", $data["writers"]);

        $newComic = new Comic(); // creo una nuova istanza del model

        // Salvo i dati immessi con il form
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route("comics.index"); // reindirizzo l'utente alla index con tutti i comics
    }

    // Ritorna una pagina con un form in cui modificare i dati dell'elemento selezionato
    public function edit($id)
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
            "comic" => Comic::find($id), // trovo il comic con quello specifico id
        ];

        return view('comics.edit', $data);
    }

    // Leggo i dati inviati dal form e modifico nel db i dati dell'elemento e reindirizzo l'utente su un'altra pagina
    public function update($id, UpdateComicsRequest $request)
    {
        $comic = Comic::findOrFail($id); // cerco nel db l'elemento corrispondente all'id

        // Inseirsco la validazione dei dati (è necessario inserire tutte le colonne che voglio popolare)
        $data = $request->validate();

        $data["artists"] = explode(",", $data["artists"]);
        $data["writers"] = explode(",", $data["writers"]);

        $comic->update($data); // aggiorno l'elemento

        return redirect()->route("comics.show", $comic->id); // reindirizzo l'utente alla pagina dell'elemento che ha modificato
    }

    // Elimino l'elemento corrispondente all'id selezionato
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id); // cerco nel db l'elemento corrispondente all'id

        $comic->delete(); // elimino l'elemento

        return redirect()->route("comics.index"); // reindirizzo l'utente alla home
    }

}

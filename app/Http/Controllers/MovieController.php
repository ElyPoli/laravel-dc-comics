<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateMoviesRequest;
use App\Models\Movie;

class MovieController extends Controller
{
    // Ritorno una view con tutti i dati nella relativa tabella del db
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
            "moviesList" => Movie::all(), // prendo dalla tabella del db tutti i dati presenti
        ];

        return view('movies.index', $data);
    }

    // Ritorno una view con i dettagli dell'elemento con quello specifico id
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
            "movie" => Movie::find($id), // individuo il film associato all'id selezionato dall'utente
        ];

        return view('movies.show', $data);
    }

    // Ritorno una view con un form dove poter inserire i dati di un nuovo elemento da aggiungere alla tabella
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

        return view("movies.create", $data);
    }

    // Ricevo i dati dal create e aggiungo il nuovo elemento nel db
    public function store(UpdateMoviesRequest $request)
    {
        // Inseirsco la validazione dei dati
        $data = $request->validated();

        $data["cast"] = explode(",", $data["cast"]);
        $data["genres"] = explode(",", $data["genres"]);

        $movie = new Movie(); // creo una nuova istanza del model

        // Salvo i dati immessi con il form
        $movie->fill($data);
        $movie->save();

        return redirect()->route("movies.index"); // reindirizzo l'utente alla index con tutti i film
    }

    // Ritorno una view con il form per modificare i dati dell'elemento selezionato
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
            "movie" => Movie::find($id), // trovo il film con l'id corrispondente
        ];

        return view('movies.edit', $data);
    }

    // Ricevo i dati dall'edit e aggiorno l'elemento nel db
    public function update($id, UpdateMoviesRequest $request)
    {
        $movie = Movie::findOrFail($id); // cerco nella tabella del db l'elemento con quell'id

        // Validazione dei dati
        $data = $request->validated();

        $data["cast"] = explode(",", $data["cast"]);
        $data["genres"] = explode(",", $data["genres"]);

        $movie->update($data); // aggiorno l'elemento

        return redirect()->route("movies.show", $movie->id); // reindirizzo l'utente alla pagina dell'elemento che ha modificato
    }

    // Cerco il determinato elemento corrisponde all'id e lo elimino
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id); // cerco nella tabella del db l'elemento con quell'id

        $movie->delete(); // elimino l'elemento

        return redirect()->route("movies.index"); // reindirizzo l'utente alla home
    }
}

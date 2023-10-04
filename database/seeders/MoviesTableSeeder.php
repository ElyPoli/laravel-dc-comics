<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    // Array con dati raw che andranno inseriti nella cartella del db
    private $rawDate = [
        [
            "title" => "The Grudge",
            "year" => 2020,
            "cast" => [
                "Andrea Riseborough",
                "Demián Bichir",
                "John Cho",
                "Betty Gilpin",
                "Lin Shaye",
                "Jacki Weaver"
            ],
            "genres" => [
                "Horror",
                "Supernatural"
            ],
            "extract" => "The Grudge is a 2020 American psychological supernatural horror film written and directed by Nicolas Pesce. Originally announced as a reboot of the 2004 American remake and the original 2002 Japanese horror film Ju-On: The Grudge, the film ended up taking place before and during the events of the 2004 film and its two direct sequels, and is the fourth installment in the American The Grudge film series. The film stars Andrea Riseborough, Demián Bichir, John Cho, Betty Gilpin, Lin Shaye, and Jacki Weaver, and follows a police officer who investigates several murders that are seemingly connected to a single house.",
            "thumbnail" => "https://upload.wikimedia.org/wikipedia/en/3/34/The_Grudge_2020_Poster.jpeg",
        ],
        [
            "title" => "The Sonata",
            "year" => 2020,
            "cast" => [
                "Freya Tingley",
                "Simon Abkarian",
                "Rutger Hauer",
                "James Faulkner"
            ],
            "genres" => [
                "Mystery",
                "Thriller"
            ],
            "extract" => "The Sonata is a 2018 mystery thriller film, directed by Andrew Desmond, from a screenplay by Desmond and Arthur Morin. It stars Freya Tingley, Simon Abkarian, James Faulkner, Rutger Hauer, Matt Barber and James Kermack. It was released in the United States on January 10, 2020, by Screen Media Films. It grossed $146,595 at the box office and received mixed reviews from critics.",
            "thumbnail" => "https://upload.wikimedia.org/wikipedia/en/1/13/The_Sonata_%282018%29_Film_Poster.jpg"
        ],
        [
            "title" => "The Gentlemen",
            "year" => 2020,
            "cast" => [
                "Matthew McConaughey",
                "Charlie Hunnam",
                "Henry Golding",
                "Michelle Dockery",
                "Jeremy Strong",
                "Eddie Marsan",
                "Colin Farrell",
                "Hugh Grant"
            ],
            "genres" => [
                "Action",
                "Comedy"
            ],
            "extract" => "The Gentlemen is a 2019 action comedy film written, directed and produced by Guy Ritchie, who developed the story along with Ivan Atkinson and Marn Davies. The film stars Matthew McConaughey, Charlie Hunnam, Henry Golding, Michelle Dockery, Jeremy Strong, Eddie Marsan, Colin Farrell, and Hugh Grant. It follows an American cannabis wholesaler in England who is looking to sell his business, setting off a chain of blackmail and schemes to undermine him.",
            "thumbnail" => "https://upload.wikimedia.org/wikipedia/en/0/06/The_Gentlemen_poster.jpg"
        ],
        [
            "title" => "Youth in Revolt",
            "year" => 2010,
            "cast" => [
                "Michael Cera",
                "Portia Doubleday",
                "Justin Long",
                "Steve Buscemi",
                "Ray Liotta",
                "Jean Smart",
                "Zach Galifianakis",
                "Erik Knudsen",
                "Adhir Kalyan",
                "Fred Willard",
                "Ari Graynor",
                "Rooney Mara",
                "Jade Fusco",
                "M. Emmet Walsh",
                "Mary Kay Place",
                "Jonathan Bradford Wright",
                "Michael Collins"
            ],
            "genres" => [
                "Comedy",
                "Drama",
                "Romance"
            ],
            "extract" => "Youth in Revolt is a 2009 American romantic comedy-drama film directed by Miguel Arteta and written by Gustin Nash. Based on C.D. Payne's epistolary novel of the same name, the film stars Michael Cera and Portia Doubleday, with Justin Long, Ray Liotta, and Steve Buscemi in supporting roles.",
            "thumbnail" => "https://upload.wikimedia.org/wikipedia/en/9/94/Youth_in_Revolt_Poster.jpg"
        ],
        [
            "title" => "28 Days",
            "year" => 2000,
            "cast" => [
                "Sandra Bullock",
                "Viggo Mortensen"
            ],
            "genres" => [
                "Drama",
                "Comedy"
            ],
            "extract" => "28 Days is a 2000 American comedy-drama film directed by Betty Thomas and written by Susannah Grant. Sandra Bullock stars as Gwen Cummings, a newspaper columnist obliged to enter rehabilitation for alcoholism. The film costars Viggo Mortensen, Dominic West, Elizabeth Perkins, Azura Skye, Steve Buscemi, and Diane Ladd.",
            "thumbnail" => "https://upload.wikimedia.org/wikipedia/en/f/f7/28_Days_Poster.jpg"
        ],
        [
            "title" => "The 6th Day",
            "year" => 2000,
            "cast" => [
                "Arnold Schwarzenegger",
                "Robert Duvall",
                "Michael Rooker",
                "Tony Goldwyn",
                "Michael Rapaport",
                "Sarah Wynter",
                "Rodney Rowland",
                "Wendy Crewson",
                "Terry Crews"
            ],
            "genres" => [
                "Science Fiction",
                "Action"
            ],
            "extract" => "The 6th Day is a 2000 American science fiction action film directed by Roger Spottiswoode and starring Arnold Schwarzenegger, Tony Goldwyn, Michael Rapaport, and Robert Duvall. In the film, a family man of the future is illegally cloned by accident as part of a vast conspiracy involving a shady billionaire businessman, and is thrust into a struggle to clear his name and protect his family from the conspirators who seek to keep the cloning a secret. The title refers to the Judeo-Christian Genesis creation narrative, where God created mankind on the sixth day. The film was Terry Crews' acting debut.",
            "thumbnail" => "https://upload.wikimedia.org/wikipedia/en/a/a0/The_6th_Day_%282000_film%29.jpg"
        ]
    ];
    

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Movie::truncate(); // Se sono già presenti dei dati nella tabella li elimino

        // Attraverso un ciclo inserisco i dati nella tabella
        foreach ($this->rawDate as $movie) {
            // Creo una nuova istanza di movie
            $movieModel = new Movie();

            $movieModel->title = $movie["title"];
            $movieModel->year = $movie["year"];
            $movieModel->cast = $movie["cast"];
            $movieModel->genres = $movie["genres"];
            $movieModel->extract = $movie["extract"];
            $movieModel->thumbnail = $movie["thumbnail"];

            $movieModel->save(); // Salvo i dati nel db
        }
    }
}

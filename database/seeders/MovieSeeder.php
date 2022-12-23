<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'title' => 'Avatar: The Way of Water',
                'description' => 'Avatar: The Way of Water is a 2022 American 3D computer-animated fantasy adventure film produced by Lightstorm Entertainment and distributed by 20th Century Studios. It is the sequel to the 2009 film Avatar and the second film in the Avatar franchise. The film is directed by James Cameron, who co-wrote the screenplay with Rick Jaffa, Amanda Silver, Josh Friedman, and Shane Salerno. It features the voices of Sam Worthington, Zoe Saldana, Sigourney Weaver, Stephen Lang, Michelle Rodriguez, Oona Chaplin, Cliff Curtis, Ving Rhames, and Kate Winslet. The film is set in the mid-22nd century, when humans have colonized Pandora, a lush habitable moon of a gas giant in the Alpha Centauri star system, in order to mine the mineral unobtanium, a room-temperature superconductor. The expansion of the frontier leads to a conflict between the RDA, a mining corporation, and the Na\'vi, a local tribe of humans who have been genetically modified to be able to live in harmony with nature. The film follows the conflict between the two sides, and the journey of a paraplegic war veteran who is brought to Pandora to infiltrate the Na\'vi and facilitate the mining operation.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/0/0b/Avatar_The_Way_of_Water.jpg',
                'year' => '2022',
                'duration' => '2h 42m',
                'genre' => 'Action, Adventure, Fantasy',
                'director' => 'James Cameron',
            ],
            [
                'title' => 'The Matrix 4',
                'description' => 'The Matrix 4 is an upcoming American science fiction action film written and directed by Lana Wachowski. It is the fourth installment in The Matrix franchise, and a sequel to The Matrix Reloaded and The Matrix Revolutions. The film stars Keanu Reeves, Carrie-Anne Moss, Yahya Abdul-Mateen II, Jonathan Groff, Neil Patrick Harris, Priyanka Chopra Jonas, Jessica Henwick, and Toby Onwumere. The plot follows Neo, Trinity, and Morpheus as they fight against the machines, while Neo discovers his true identity.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/2/26/The_Matrix_4_poster.jpg',
                'year' => '2022',
                'duration' => '2h 42m',
                'genre' => 'Action, Adventure, Fantasy',
                'director' => 'Lana Wachowski',
            ],
            [
                'title' => 'Black Widow',
                'description' => 'Black Widow is an upcoming American superhero film based on the Marvel Comics character of the same name. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is intended to be the 24th film in the Marvel Cinematic Universe (MCU). The film is directed by Cate Shortland, with a screenplay by Eric Pearson and Jac Schaeffer, and stars Scarlett Johansson as Natasha Romanoff / Black Widow alongside Florence Pugh, David Harbour, O-T Fagbenle, Ray Winstone, and Rachel Weisz. In Black Widow, Romanoff confronts the darker parts of her ledger when a dangerous conspiracy with ties to her past arises.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/0/0f/Black_Widow_poster.jpg',
                'year' => '2021',
                'duration' => '2h 14m',
                'genre' => 'Action, Adventure, Sci-Fi',
                'director' => 'Cate Shortland',
            ],
            [
                'title' => 'Black Panther 2',
                'description' => 'Black Panther 2 is an upcoming American superhero film based on the Marvel Comics character of the same name. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is intended to be the 25th film in the Marvel Cinematic Universe (MCU). The film is directed by Ryan Coogler, who co-wrote the screenplay with Joe Robert Cole, and stars Chadwick Boseman as T\'Challa / Black Panther alongside Michael B. Jordan, Lupita Nyong\'o, Danai Gurira, Letitia Wright, Winston Duke, Angela Bassett, Forest Whitaker, and Andy Serkis. In Black Panther 2, T\'Challa must confront a new challenger who threatens the fate of Wakanda and the entire world.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/0/0c/Black_Panther_2_poster.jpg',
                'year' => '2022',
                'duration' => '2h 14m',
                'genre' => 'Action, Adventure, Sci-Fi',
                'director' => 'Ryan Coogler',
            ]
        ];

        foreach ($movies as $movie) {
            Movie::create([
                'title' => $movie['title'],
                'description' => $movie['description'],
                'image' => $movie['image'],
                'year' => $movie['year'],
                'duration' => $movie['duration'],
                'genre' => $movie['genre'],
                'director' => $movie['director'],
            ]);
        }
    }
}

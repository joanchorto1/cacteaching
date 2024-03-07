<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pelicula;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'admin' => false,
         ]);
        User::factory()->create([
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'admin' => true,
        ]);

        //Crear 4 categorias de series

        \App\Models\Categoria::create(
            ['nombre' => 'Desarrollo Web']
        );
        \App\Models\Categoria::create(
            ['nombre' => 'Diseño Web']
        );
        \App\Models\Categoria::create(
            ['nombre' => 'Desarrollo Movil']
        );
        \App\Models\Categoria::create(
            ['nombre' => 'Diseño Movil']
        );

        //Crear 4 series por cada categoria

        \App\Models\Serie::create(
            ['titulo' => 'Serie de Desarrollo Web 1', 'descripcion' => 'Descripcion de la serie de desarrollo web 1', 'categoria_id' => 1]
        );
        \App\Models\Serie::create(
            ['titulo' => 'Serie de Desarrollo Web 2', 'descripcion' => 'Descripcion de la serie de desarrollo web 2', 'categoria_id' => 1]
        );
        \App\Models\Serie::create(
            ['titulo' => 'Serie de Desarrollo Web 3', 'descripcion' => 'Descripcion de la serie de desarrollo web 3', 'categoria_id' => 1]
        );
        \App\Models\Serie::create(
            ['titulo' => 'Serie de Desarrollo Web 4', 'descripcion' => 'Descripcion de la serie de desarrollo web 4', 'categoria_id' => 1]
        );
        \App\Models\Serie::create(
            ['titulo' => 'Serie de Diseño Web 1', 'descripcion' => 'Descripcion de la serie de diseño web 1', 'categoria_id' => 2]
        );
        \App\Models\Serie::create(
            ['titulo' => 'Serie de Diseño Web 2', 'descripcion' => 'Descripcion de la serie de diseño web 2', 'categoria_id' => 2]
        );
        \App\Models\Serie::create(
            ['titulo' => 'Serie de Diseño Web 3', 'descripcion' => 'Descripcion de la serie de diseño web 3', 'categoria_id' => 2]
        );
        \App\Models\Serie::create(
            ['titulo' => 'Serie de Diseño Web 4', 'descripcion' => 'Descripcion de la serie de diseño web 4', 'categoria_id' => 2]
        );
        \App\Models\Serie::create(
            ['titulo' => 'Serie de Desarrollo Movil 1', 'descripcion' => 'Descripcion de la serie de desarrollo movil 1', 'categoria_id' => 3]
        );
        \App\Models\Serie::create(
            ['titulo' => 'Serie de Desarrollo Movil 2', 'descripcion' => 'Descripcion de la serie de desarrollo movil 2', 'categoria_id' => 3]
        );
        \App\Models\Serie::create(
            ['titulo' => 'Serie de Desarrollo Movil 3', 'descripcion' => 'Descripcion de la serie de desarrollo movil 3', 'categoria_id' => 3]
        );
        \App\Models\Serie::create(
            ['titulo' => 'Serie de Desarrollo Movil 4', 'descripcion' => 'Descripcion de la serie de desarrollo movil 4', 'categoria_id' => 3]
        );
        \App\Models\Serie::create(
            ['titulo' => 'Serie de Diseño Movil 1', 'descripcion' => 'Descripcion de la serie de diseño movil 1', 'categoria_id' => 4]
        );
        \App\Models\Serie::create(
            ['titulo' => 'Serie de Diseño Movil 2', 'descripcion' => 'Descripcion de la serie de diseño movil 2', 'categoria_id' => 4]
        );
        \App\Models\Serie::create(
            ['titulo' => 'Serie de Diseño Movil 3', 'descripcion' => 'Descripcion de la serie de diseño movil 3', 'categoria_id' => 4]
        );
        \App\Models\Serie::create(
            ['titulo' => 'Serie de Diseño Movil 4', 'descripcion' => 'Descripcion de la serie de diseño movil 4', 'categoria_id' => 4]
        );


        //4 peliculas de cada categoria
        Pelicula::create([
            'titulo'=> 'La primera pagina web',
            'descripcion'=>'Pelicula sobre desarroloo web',
            'url'=> 'html',
            'categoria_id' => 1
        ]);
        Pelicula::create([
            'titulo'=> 'La segunda pagina web',
            'descripcion'=>'Pelicula sobre desarroloo web',
            'url'=> 'html',
            'categoria_id' => 1
        ]);
        Pelicula::create([
            'titulo'=> 'La tercera pagina web',
            'descripcion'=>'Pelicula sobre desarroloo web',
            'url'=> 'html',
            'categoria_id' => 1
        ]);

        Pelicula::create([
            'titulo'=> 'La cuarta pagina web',
            'descripcion'=>'Pelicula sobre desarroloo web',
            'url'=> 'html',
            'categoria_id' => 1
        ]);
        Pelicula::create([
            'titulo'=> 'La primera pagina diseño web',
            'descripcion'=>'Pelicula sobre diseño web',
            'url'=> 'html',
            'categoria_id' => 2
        ]);
        Pelicula::create([
            'titulo'=> 'La segunda pagina diseño web',
            'descripcion'=>'Pelicula sobre diseño web',
            'url'=> 'html',
            'categoria_id' => 2
        ]);
        Pelicula::create([
            'titulo'=> 'La tercera pagina diseño web',
            'descripcion'=>'Pelicula sobre diseño web',
            'url'=> 'html',
            'categoria_id' => 2
        ]);
        Pelicula::create([
            'titulo'=> 'La cuarta pagina diseño web',
            'descripcion'=>'Pelicula sobre diseño web',
            'url'=> 'html',
            'categoria_id' => 2
        ]);
        Pelicula::create([
            'titulo'=> 'La primera pagina desarrollo movil',
            'descripcion'=>'Pelicula sobre desarrollo movil',
            'url'=> 'html',
            'categoria_id' => 3
        ]);
        Pelicula::create([
            'titulo'=> 'La segunda pagina desarrollo movil',
            'descripcion'=>'Pelicula sobre desarrollo movil',
            'url'=> 'html',
            'categoria_id' => 3
        ]);
        Pelicula::create([
            'titulo'=> 'La tercera pagina desarrollo movil',
            'descripcion'=>'Pelicula sobre desarrollo movil',
            'url'=> 'html',
            'categoria_id' => 3
        ]);
        Pelicula::create([
            'titulo'=> 'La cuarta pagina desarrollo movil',
            'descripcion'=>'Pelicula sobre desarrollo movil',
            'url'=> 'html',
            'categoria_id' => 3
        ]);
        Pelicula::create([
            'titulo'=> 'La primera pagina diseño movil',
            'descripcion'=>'Pelicula sobre diseño movil',
            'url'=> 'html',
            'categoria_id' => 4
        ]);
        Pelicula::create([
            'titulo'=> 'La segunda pagina diseño movil',
            'descripcion'=>'Pelicula sobre diseño movil',
            'url'=> 'html',
            'categoria_id' => 4
        ]);
        Pelicula::create([
            'titulo'=> 'La tercera pagina diseño movil',
            'descripcion'=>'Pelicula sobre diseño movil',
            'url'=> 'html',
            'categoria_id' => 4
        ]);
        Pelicula::create([
            'titulo'=> 'La cuarta pagina diseño movil',
            'descripcion'=>'Pelicula sobre diseño movil',
            'url'=> 'html',
            'categoria_id' => 4
        ]);

        //Crear 4 videos por serie
        \App\Models\Video::create(
            ['titulo' => 'Video 1 de Desarrollo Web 1', 'descripcion' => 'Descripcion del video 1 de desarrollo web 1', 'url' => 'https://www.youtube.com/watch?v=1', 'serie_id' => 1]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 2 de Desarrollo Web 1', 'descripcion' => 'Descripcion del video 2 de desarrollo web 1', 'url' => 'https://www.youtube.com/watch?v=2', 'serie_id' => 1]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 3 de Desarrollo Web 1', 'descripcion' => 'Descripcion del video 3 de desarrollo web 1', 'url' => 'https://www.youtube.com/watch?v=3', 'serie_id' => 1]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 4 de Desarrollo Web 1', 'descripcion' => 'Descripcion del video 4 de desarrollo web 1', 'url' => 'https://www.youtube.com/watch?v=4', 'serie_id' => 1]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 1 de Desarrollo Web 2', 'descripcion' => 'Descripcion del video 1 de desarrollo web 2', 'url' => 'https://www.youtube.com/watch?v=5', 'serie_id' => 2]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 2 de Desarrollo Web 2', 'descripcion' => 'Descripcion del video 2 de desarrollo web 2', 'url' => 'https://www.youtube.com/watch?v=6', 'serie_id' => 2]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 3 de Desarrollo Web 2', 'descripcion' => 'Descripcion del video 3 de desarrollo web 2', 'url' => 'https://www.youtube.com/watch?v=7', 'serie_id' => 2]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 4 de Desarrollo Web 2', 'descripcion' => 'Descripcion del video 4 de desarrollo web 2', 'url' => 'https://www.youtube.com/watch?v=8', 'serie_id' => 2]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 1 de Desarrollo Web 3', 'descripcion' => 'Descripcion del video 1 de desarrollo web 3', 'url' => 'https://www.youtube.com/watch?v=9', 'serie_id' => 3]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 2 de Desarrollo Web 3', 'descripcion' => 'Descripcion del video 2 de desarrollo web 3', 'url' => 'https://www.youtube.com/watch?v=10', 'serie_id' => 3]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 3 de Desarrollo Web 3', 'descripcion' => 'Descripcion del video 3 de desarrollo web 3', 'url' => 'https://www.youtube.com/watch?v=11', 'serie_id' => 3]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 4 de Desarrollo Web 3', 'descripcion' => 'Descripcion del video 4 de desarrollo web 3', 'url' => 'https://www.youtube.com/watch?v=12', 'serie_id' => 3]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 1 de Desarrollo Web 4', 'descripcion' => 'Descripcion del video 1 de desarrollo web 4', 'url' => 'https://www.youtube.com/watch?v=13', 'serie_id' => 4]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 2 de Desarrollo Web 4', 'descripcion' => 'Descripcion del video 2 de desarrollo web 4', 'url' => 'https://www.youtube.com/watch?v=14', 'serie_id' => 4]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 3 de Desarrollo Web 4', 'descripcion' => 'Descripcion del video 3 de desarrollo web 4', 'url' => 'https://www.youtube.com/watch?v=15', 'serie_id' => 4]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 4 de Desarrollo Web 4', 'descripcion' => 'Descripcion del video 4 de desarrollo web 4', 'url' => 'https://www.youtube.com/watch?v=16', 'serie_id' => 4]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 1 de Diseño Web 1', 'descripcion' => 'Descripcion del video 1 de diseño web 1', 'url' => 'https://www.youtube.com/watch?v=17', 'serie_id' => 5]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 2 de Diseño Web 1', 'descripcion' => 'Descripcion del video 2 de diseño web 1', 'url' => 'https://www.youtube.com/watch?v=18', 'serie_id' => 5]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 3 de Diseño Web 1', 'descripcion' => 'Descripcion del video 3 de diseño web 1', 'url' => 'https://www.youtube.com/watch?v=19', 'serie_id' => 5]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 4 de Diseño Web 1', 'descripcion' => 'Descripcion del video 4 de diseño web 1', 'url' => 'https://www.youtube.com/watch?v=20', 'serie_id' => 5]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 1 de Diseño Web 2', 'descripcion' => 'Descripcion del video 1 de diseño web 2', 'url' => 'https://www.youtube.com/watch?v=21', 'serie_id' => 6]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 2 de Diseño Web 2', 'descripcion' => 'Descripcion del video 2 de diseño web 2', 'url' => 'https://www.youtube.com/watch?v=22', 'serie_id' => 6]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 3 de Diseño Web 2', 'descripcion' => 'Descripcion del video 3 de diseño web 2', 'url' => 'https://www.youtube.com/watch?v=23', 'serie_id' => 6]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 4 de Diseño Web 2', 'descripcion' => 'Descripcion del video 4 de diseño web 2', 'url' => 'https://www.youtube.com/watch?v=24', 'serie_id' => 6]
        );
\App\Models\Video::create(
            ['titulo' => 'Video 1 de Diseño Web 3', 'descripcion' => 'Descripcion del video 1 de diseño web 3', 'url' => 'https://www.youtube.com/watch?v=25', 'serie_id' => 7]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 2 de Diseño Web 3', 'descripcion' => 'Descripcion del video 2 de diseño web 3', 'url' => 'https://www.youtube.com/watch?v=26', 'serie_id' => 7]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 3 de Diseño Web 3', 'descripcion' => 'Descripcion del video 3 de diseño web 3', 'url' => 'https://www.youtube.com/watch?v=27', 'serie_id' => 7]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 4 de Diseño Web 3', 'descripcion' => 'Descripcion del video 4 de diseño web 3', 'url' => 'https://www.youtube.com/watch?v=28', 'serie_id' => 7]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 1 de Diseño Web 4', 'descripcion' => 'Descripcion del video 1 de diseño web 4', 'url' => 'https://www.youtube.com/watch?v=29', 'serie_id' => 8]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 2 de Diseño Web 4', 'descripcion' => 'Descripcion del video 2 de diseño web 4', 'url' => 'https://www.youtube.com/watch?v=30', 'serie_id' => 8]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 3 de Diseño Web 4', 'descripcion' => 'Descripcion del video 3 de diseño web 4', 'url' => 'https://www.youtube.com/watch?v=31', 'serie_id' => 8]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 4 de Diseño Web 4', 'descripcion' => 'Descripcion del video 4 de diseño web 4', 'url' => 'https://www.youtube.com/watch?v=32', 'serie_id' => 8]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 1 de Desarrollo Movil 1', 'descripcion' => 'Descripcion del video 1 de desarrollo movil 1', 'url' => 'https://www.youtube.com/watch?v=33', 'serie_id' => 9]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 2 de Desarrollo Movil 1', 'descripcion' => 'Descripcion del video 2 de desarrollo movil 1', 'url' => 'https://www.youtube.com/watch?v=34', 'serie_id' => 9]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 3 de Desarrollo Movil 1', 'descripcion' => 'Descripcion del video 3 de desarrollo movil 1', 'url' => 'https://www.youtube.com/watch?v=35', 'serie_id' => 9]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 4 de Desarrollo Movil 1', 'descripcion' => 'Descripcion del video 4 de desarrollo movil 1', 'url' => 'https://www.youtube.com/watch?v=36', 'serie_id' => 9]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 1 de Desarrollo Movil 2', 'descripcion' => 'Descripcion del video 1 de desarrollo movil 2', 'url' => 'https://www.youtube.com/watch?v=37', 'serie_id' => 10]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 2 de Desarrollo Movil 2', 'descripcion' => 'Descripcion del video 2 de desarrollo movil 2', 'url' => 'https://www.youtube.com/watch?v=38', 'serie_id' => 10]
        );

        \App\Models\Video::create(
            ['titulo' => 'Video 3 de Desarrollo Movil 2', 'descripcion' => 'Descripcion del video 3 de desarrollo movil 2', 'url' => 'https://www.youtube.com/watch?v=39', 'serie_id' => 10]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 4 de Desarrollo Movil 2', 'descripcion' => 'Descripcion del video 4 de desarrollo movil 2', 'url' => 'https://www.youtube.com/watch?v=40', 'serie_id' => 10]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 1 de Desarrollo Movil 3', 'descripcion' => 'Descripcion del video 1 de desarrollo movil 3', 'url' => 'https://www.youtube.com/watch?v=41', 'serie_id' => 11]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 2 de Desarrollo Movil 3', 'descripcion' => 'Descripcion del video 2 de desarrollo movil 3', 'url' => 'https://www.youtube.com/watch?v=42', 'serie_id' => 11]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 3 de Desarrollo Movil 3', 'descripcion' => 'Descripcion del video 3 de desarrollo movil 3', 'url' => 'https://www.youtube.com/watch?v=43', 'serie_id' => 11]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 4 de Desarrollo Movil 3', 'descripcion' => 'Descripcion del video 4 de desarrollo movil 3', 'url' => 'https://www.youtube.com/watch?v=44', 'serie_id' => 11]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 1 de Desarrollo Movil 4', 'descripcion' => 'Descripcion del video 1 de desarrollo movil 4', 'url' => 'https://www.youtube.com/watch?v=45', 'serie_id' => 12]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 2 de Desarrollo Movil 4', 'descripcion' => 'Descripcion del video 2 de desarrollo movil 4', 'url' => 'https://www.youtube.com/watch?v=46', 'serie_id' => 12]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 3 de Desarrollo Movil 4', 'descripcion' => 'Descripcion del video 3 de desarrollo movil 4', 'url' => 'https://www.youtube.com/watch?v=47', 'serie_id' => 12]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 4 de Desarrollo Movil 4', 'descripcion' => 'Descripcion del video 4 de desarrollo movil 4', 'url' => 'https://www.youtube.com/watch?v=48', 'serie_id' => 12]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 1 de Diseño Movil 1', 'descripcion' => 'Descripcion del video 1 de diseño movil 1', 'url' => 'https://www.youtube.com/watch?v=49', 'serie_id' => 13]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 2 de Diseño Movil 1', 'descripcion' => 'Descripcion del video 2 de diseño movil 1', 'url' => 'https://www.youtube.com/watch?v=50', 'serie_id' => 13]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 3 de Diseño Movil 1', 'descripcion' => 'Descripcion del video 3 de diseño movil 1', 'url' => 'https://www.youtube.com/watch?v=51', 'serie_id' => 13]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 4 de Diseño Movil 1', 'descripcion' => 'Descripcion del video 4 de diseño movil 1', 'url' => 'https://www.youtube.com/watch?v=52', 'serie_id' => 13]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 1 de Diseño Movil 2', 'descripcion' => 'Descripcion del video 1 de diseño movil 2', 'url' => 'https://www.youtube.com/watch?v=53', 'serie_id' => 14]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 2 de Diseño Movil 2', 'descripcion' => 'Descripcion del video 2 de diseño movil 2', 'url' => 'https://www.youtube.com/watch?v=54', 'serie_id' => 14]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 3 de Diseño Movil 2', 'descripcion' => 'Descripcion del video 3 de diseño movil 2', 'url' => 'https://www.youtube.com/watch?v=55', 'serie_id' => 14]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 4 de Diseño Movil 2', 'descripcion' => 'Descripcion del video 4 de diseño movil 2', 'url' => 'https://www.youtube.com/watch?v=56', 'serie_id' => 14]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 1 de Diseño Movil 3', 'descripcion' => 'Descripcion del video 1 de diseño movil 3', 'url' => 'https://www.youtube.com/watch?v=57', 'serie_id' => 15]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 2 de Diseño Movil 3', 'descripcion' => 'Descripcion del video 2 de diseño movil 3', 'url' => 'https://www.youtube.com/watch?v=58', 'serie_id' => 15]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 3 de Diseño Movil 3', 'descripcion' => 'Descripcion del video 3 de diseño movil 3', 'url' => 'https://www.youtube.com/watch?v=59', 'serie_id' => 15]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 4 de Diseño Movil 3', 'descripcion' => 'Descripcion del video 4 de diseño movil 3', 'url' => 'https://www.youtube.com/watch?v=60', 'serie_id' => 15]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 1 de Diseño Movil 4', 'descripcion' => 'Descripcion del video 1 de diseño movil 4', 'url' => 'https://www.youtube.com/watch?v=61', 'serie_id' => 16]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 2 de Diseño Movil 4', 'descripcion' => 'Descripcion del video 2 de diseño movil 4', 'url' => 'https://www.youtube.com/watch?v=62', 'serie_id' => 16]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 3 de Diseño Movil 4', 'descripcion' => 'Descripcion del video 3 de diseño movil 4', 'url' => 'https://www.youtube.com/watch?v=63', 'serie_id' => 16]
        );
        \App\Models\Video::create(
            ['titulo' => 'Video 4 de Diseño Movil 4', 'descripcion' => 'Descripcion del video 4 de diseño movil 4', 'url' => 'https://www.youtube.com/watch?v=64', 'serie_id' => 16]
        );










    }
}

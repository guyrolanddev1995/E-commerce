<?php

use App\Carousel;
use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carousels = [
            [
                "url" => "42JQ22OM1GKpbjTYIaalntRE8.jpg",
                "created_at" => "2021-06-09 03:26:49",
                "updated_at" => "2021-06-09 03:26:49",
            ],
            [
                "url" => "A18xYa6j6SSsSsCniqaYUHaHh.jpg",
                "created_at" => "2021-06-09 03:27:00",
                "updated_at" => "2021-06-09 03:27:00",
            ],
            [
                "url" => "RaPvZIJ9DHLyPHLuTgFAbRYEZ.jpg",
                "created_at" => "2021-06-09 03:27:21",
                "updated_at" => "2021-06-09 03:27:21",
            ],
            [
                "url" => "MWhXgG2Zt75r7BcRZZVGTcpXc.jpg",
                "created_at" => "2021-06-09 03:27:34",
                "updated_at" => "2021-06-09 03:27:34",
            ],
            [
                "url" => "FJ00MTFulqWPs6jn1ghqtgcih.jpg",
                "created_at" => "2021-06-09 03:27:54",
                "updated_at" => "2021-06-09 03:27:54",
            ],
            [
                "url" => "iy88z6v8fqrTeSLsMzGP4vmqd.png",
                "created_at" => "2021-06-09 03:47:00",
                "updated_at" => "2021-06-09 03:47:00",
            ],
            [
                "url" => "pNahhwXvPvkN2N7Pi5j3lLeOC.png",
                "created_at" => "2021-06-09 03:47:47",
                "updated_at" => "2021-06-09 03:47:47",
            ],
            [
                "url" => "yXzOLWQ9lTMwj2d2pRAaT24a1.jpg",
                "created_at" => "2021-06-09 03:48:06",
                "updated_at" => "2021-06-09 03:48:06",
            ],
            [
                "url" => "r1AoHI6fhGOzKxt97fx8KXv0p.png",
                "created_at" => "2021-06-09 03:48:22",
                "updated_at" => "2021-06-09 03:48:22",
            ],
        ];
        
        foreach($carousels as $carousel){
            Carousel::create($carousel);
        }
    }
}

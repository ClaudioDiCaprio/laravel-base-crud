<?php

use Illuminate\Database\Seeder;
use App\Comic;
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config("comics");

        foreach( $comics as $comic ) {
            $newComic = new Comic();
            $newComic-> name = $comic["title"];
            $newComic-> description = $comic["description"];
            $newComic-> image = $comic["thumb"];
            $newComic-> price = $comic["price"];
            $newComic-> sale_data = $comic["sale_date"];
            $newComic-> type = $comic["type"];
            $newComic->save();
        }
    }
}

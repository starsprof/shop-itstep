<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
//        DB::table('products')->insert([
//            'name' => str_random(10),
//            'email' => str_random(10).'@gmail.com',
//            'password' => bcrypt('secret'),
//        ]);
        $products = json_decode(Storage::disk()->get('products.json'),true);
        $collections = [];
        foreach($products as $product){
            $collections[] = $product['collection'];
        }

        $collections = array_unique($collections);
        foreach ($collections as $collection){
            $category = new \App\Category();
            $category->title = $collection;
            $category->image = 'image';
            $category->description = 'description';
            $category->create_by = 1;
            $category->publish = 1;
            $category->slug = Str::random('10');
            $category->save();
        }

        $womenCategory = [];
        $manCategory=[];
        foreach($products as $product){
            if($product['collection'] === 'Женская коллекция'){
                $womenCategory[] = $product['category'];
            }else{
                $manCategory[] = $product['category'];
            }
        }

        $parentWomenCategory = Category::whereTitle('Женская коллекция')->first();
        $parentManCategory = Category::whereTitle('Мужская коллекция')->first();
        $womenCategory = array_unique($womenCategory);
        $manCategory = array_unique($manCategory);

        foreach ($womenCategory as $category) {
            DB::table('categories')->insert([
                'title' => $category,
                'image' => 'image',
                'description' => 'description',
                'create_by' => 1,
                'publish'=> 1,
                'slug' => Str::random('10'),
                'parent_id' => $parentWomenCategory->id
            ]);
        }

        foreach ($manCategory as $category) {
            DB::table('categories')->insert([
                'title' => $category,
                'image' => 'image',
                'description' => 'description',
                'create_by' => 1,
                'publish'=> 1,
                'slug' => Str::random('10'),
                'parent_id' => $parentManCategory->id
            ]);
        }

        DB::transaction(function ()use ($products, $parentWomenCategory, $parentManCategory) {
            foreach ($products as $product){
                if($product['collection'] === 'Женская коллекция') {
                    $category = $parentWomenCategory->children->where('title',$product['category'])->first();
                }else{
                    $category = $parentManCategory->children->where('title',$product['category'])->first();
                }

                $product['images'] = array_map(function ($image){
                    $tmp = explode('/', $image);
                    $fileName =  array_pop($tmp);
                    return Storage::url('product_images/' . $fileName);
                }, $product['images']);
                DB::table('products')->insert([
                    'code' => $product['model'],
                    'slug' => Str::random('10'),
                    'title' => $product['title'],
                    'description' => $product['description'],
                    'image' => array_pop($product['images']),
                    'gallery' =>json_encode($product['images']),
                    'price' => (float) str_replace(' ','',trim($product['price'])),
                    'composition' => $product['composition'],
                    'line' => $product['line'],
                    'color' => $product['color'],
                    'size' => json_encode($product['size']),
                    'height' => json_encode($product['height']),
                    'category_id' => $category->id
                ]);
            }
        });
        DB::commit();

    }
}

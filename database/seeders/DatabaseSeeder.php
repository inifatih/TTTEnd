<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Content;
use App\Models\Section;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //user
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('abc'),
            'is_admin' => 1
        ]);

        //category
        Category::create([
            'name' => 'Tops',
            'slug' => 'tops',
        ]);
        
        Category::create([
            'name' => 'Bottoms',
            'slug' => 'bottoms',
        ]);

        Category::create([
            'name' => 'Sweaters',
            'slug' => 'sweaters',
        ]);
        
        Category::create([
            'name' => 'Jackets',
            'slug' => 'jackets',
        ]);

        Category::create([
            'name' => 'Accessories',
            'slug' => 'accessories',
        ]);

        //section
        Section::create([
            'name' => 'Man',
            'slug' => 'man',
        ]);

        Section::create([
            'name' => 'Woman',
            'slug' => 'woman',
        ]);

        //post
        Post::create([
            'title' => 'Kaos Lengan Pendek',
            'slug' => 'kaos-lengan-pendek',
            'desc' => 'Kaos lengan pendek dengan bahan berkualitas yang nyaman digunakan pada kegiatan sehari-hari.',
            'price' => '100',
            'category_id' => '1',
            'section_id' => '1'
        ]);
        
        Post::create([
            'title' => 'Kaos Lengan Panjang',
            'slug' => 'kaos-lengan-panjang',
            'desc' => 'Kaos lengan panjang dengan bahan berkualitas yang nyaman digunakan pada kegiatan sehari-hari.',
            'price' => '120',
            'category_id' => '1',
            'section_id' => '1'
        ]);

        Post::create([
            'title' => 'Celana Pendek',
            'slug' => 'celana-pendek',
            'desc' => 'Celana pendek dengan bahan berkualitas yang nyaman digunakan pada kegiatan sehari-hari.',
            'price' => '80',
            'category_id' => '2',
            'section_id' => '1'
        ]);

        Post::create([
            'title' => 'Celana Panjang',
            'slug' => 'celana-panjang',
            'desc' => 'Celana panjang dengan bahan berkualitas yang nyaman digunakan pada kegiatan sehari-hari.',
            'price' => '150',
            'category_id' => '2',
            'section_id' => '1'
        ]);

        Post::create([
            'title' => 'Celana Panjang Cargo',
            'slug' => 'celana-panjang-cargo',
            'desc' => 'Celana panjang cargo berkualitas yang nyaman digunakan dan fungsional untuk kegiatan sehari-hari.',
            'price' => '150',
            'category_id' => '2',
            'section_id' => '1'
        ]);

        Post::create([
            'title' => 'Jaket Utiliti',
            'slug' => 'jaket-utiliti',
            'desc' => 'Jaket dengan kualitas terbaik',
            'price' => '100',
            'category_id' => '3',
            'section_id' => '1'
        ]);




        //content
        Content::create([
            'title' => 'T-Shirt for Your Everyday',
            'desc' => 'Lihat kaos nyaman pilihan kami untuk menjalani kegiatan sehari-hari',
            'slug' => 'tops',
            'category_id' => '1'
        ]);

        Content::create([
            'title' => 'Look our Tops Collection',
            'desc' => 'Lihat atasan nyaman dari kami untuk menjalani kegiatan sehari-hari',
            'slug' => 'tops',
            'category_id' => '1'
        ]);

        Content::create([
            'title' => 'Look our Bottoms Collection',
            'desc' => 'Lihat bawahan nyaman dari kami untuk menjalani kegiatan sehari-hari',
            'slug' => 'bottoms',
            'category_id' => '2'
        ]);

        Content::create([
            'title' => 'Our First Denim',
            'desc' => 'Lihat bawahan nyaman pilihan kami untuk menjalani kegiatan sehari-hari',
            'slug' => 'bottoms',
            'category_id' => '2'
        ]);

        Content::create([
            'title' => 'Our Jackets Collection',
            'desc' => 'Lihat bawahan nyaman pilihan kami untuk menjalani kegiatan sehari-hari',
            'slug' => 'jackets',
            'category_id' => '3'
        ]);
    }
}

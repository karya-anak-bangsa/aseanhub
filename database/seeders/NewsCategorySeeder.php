<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use Illuminate\Database\Seeder;

class NewsCategorySeeder extends Seeder
{
    public function run(): void
    {

        NewsCategory::insert([
            [
                'category_name_en'  => 'Infrastructure',
                'category_name_id'  => 'Infrastruktur',
                'slug_en'           => 'infrastructure',
                'slug_id'           => 'infrastruktur',
                'description_en'    => null,
                'description_id'    => null,
                'sort_order'        => 0,
                'status_data'       => 'Active',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            [
                'category_name_en'  => 'Transportation',
                'category_name_id'  => 'Transportasi',
                'slug_en'           => 'transportation',
                'slug_id'           => 'transportasi',
                'description_en'    => null,
                'description_id'    => null,
                'sort_order'        => 0,
                'status_data'       => 'Active',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            [
                'category_name_en' => 'Investment',
                'category_name_id' => 'Investasi',
                'slug_en' => 'investment',
                'slug_id' => 'investasi',
                'description_en' => null,
                'description_id' => null,
                'sort_order' => 0,
                'status_data' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_name_en' => 'Tourism',
                'category_name_id' => 'Pariwisata',
                'slug_en' => 'tourism',
                'slug_id' => 'pariwisata',
                'description_en' => null,
                'description_id' => null,
                'sort_order' => 0,
                'status_data' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_name_en' => 'Smart City',
                'category_name_id' => 'Smart City',
                'slug_en' => 'smart-city',
                'slug_id' => 'smart-city',
                'description_en' => null,
                'description_id' => null,
                'sort_order' => 0,
                'status_data' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_name_en' => 'ASEAN Cooperation',
                'category_name_id' => 'Kerja Sama ASEAN',
                'slug_en' => 'asean-cooperation',
                'slug_id' => 'kerja-sama-asean',
                'description_en' => null,
                'description_id' => null,
                'sort_order' => 0,
                'status_data' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_name_en' => 'Announcement',
                'category_name_id' => 'Pengumuman',
                'slug_en' => 'announcement',
                'slug_id' => 'pengumuman',
                'description_en' => null,
                'description_id' => null,
                'sort_order' => 0,
                'status_data' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

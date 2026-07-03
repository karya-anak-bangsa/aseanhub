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
                'category_name_en'  => 'Development',
                'category_name_id'  => 'Pembangunan',
                'slug_en'           => 'development',
                'slug_id'           => 'pembangunan',
                'description_en'    => null,
                'description_id'    => null,
                'sort_order'        => 1,
                'status_data'       => 'Active',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            [
                'category_name_en'  => 'Infrastructure',
                'category_name_id'  => 'Infrastruktur',
                'slug_en'           => 'infrastructure',
                'slug_id'           => 'infrastruktur',
                'description_en'    => null,
                'description_id'    => null,
                'sort_order'        => 2,
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
                'sort_order'        => 3,
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
                'sort_order' => 4,
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
                'sort_order' => 5,
                'status_data' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_name_en' => 'Culture',
                'category_name_id' => 'Budaya',
                'slug_en' => 'culture',
                'slug_id' => 'budaya',
                'description_en' => null,
                'description_id' => null,
                'sort_order' => 6,
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
                'sort_order' => 7,
                'status_data' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_name_en' => 'Environment',
                'category_name_id' => 'Lingkungan',
                'slug_en' => 'environment',
                'slug_id' => 'lingkungan',
                'description_en' => null,
                'description_id' => null,
                'sort_order' => 8,
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
                'sort_order' => 9,
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
                'sort_order' => 10,
                'status_data' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

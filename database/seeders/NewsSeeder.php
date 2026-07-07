<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        News::truncate();

        News::create([
            'id_news_category'      => 1,
            'title_en'              => 'Jakarta Expands Integrated Infrastructure Development',
            'slug_en'               => 'jakarta-expands-integrated-infrastructure-development',
            'excerpt_en'            => 'Jakarta continues to improve integrated infrastructure across strategic areas.',
            'content_en'            => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'thumbnail_en'          => null,

            'title_id'              => 'Jakarta Perluas Pembangunan Infrastruktur Terpadu',
            'slug_id'               => 'jakarta-perluas-pembangunan-infrastruktur-terpadu',
            'excerpt_id'            => 'Jakarta terus meningkatkan pembangunan infrastruktur di berbagai kawasan strategis.',
            'content_id'            => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'thumbnail_id'          => null,

            'meta_title_en'         => 'Infrastructure Development',
            'meta_description_en'   => null,
            'meta_keywords_en'      => 'Infrastructure, Jakarta, ASEAN Hub',

            'meta_title_id'         => 'Pembangunan Infrastruktur',
            'meta_description_id'   => null,
            'meta_keywords_id'      => 'Infrastruktur, Jakarta, ASEAN Hub',

            'author_name_en'        => 'ASEAN Hub',
            'author_name_id'        => 'ASEAN Hub',
            'published_at'          => now(),
            'published_status'      => 'Published',
            'views'                 => 0,

            'status_data'           => 'Active',
            'created_at'            => now(),
            'updated_at'            => now(),
        ]);

        News::create([
            'id_news_category'      => 2,
            'title_en'              => 'Modern Transportation Supports Urban Mobility',
            'slug_en'               => 'modern-transportation-supports-urban-mobility',
            'excerpt_en'            => 'Transportation plays an important role in sustainable cities.',
            'content_en'            => 'Lorem ipsum dolor sit amet.',
            'thumbnail_en'          => null,

            'title_id'              => 'Transportasi Modern Mendukung Mobilitas Perkotaan',
            'slug_id'               => 'transportasi-modern-mendukung-mobilitas-perkotaan',
            'excerpt_id'            => 'Transportasi memiliki peran penting dalam pembangunan kota berkelanjutan.',
            'content_id'            => 'Lorem ipsum dolor sit amet.',
            'thumbnail_id'          => null,

            'meta_title_en'         => 'Transportation',
            'meta_description_en'   => null,
            'meta_keywords_en'      => 'Transportation',

            'meta_title_id'         => 'Transportasi',
            'meta_description_id'   => null,
            'meta_keywords_id'      => 'Transportasi',

            'author_name_en'        => 'ASEAN Hub',
            'author_name_id'        => 'ASEAN Hub',
            'published_at'          => now(),
            'published_status'      => 'Published',
            'views'                 => 0,

            'status_data'           => 'Active',
            'created_at'            => now(),
            'updated_at'            => now(),
        ]);

        News::create([
            'id_news_category'      => 3,
            'title_en'              => 'Investment Opportunities Continue to Grow',
            'slug_en'               => 'investment-opportunities-continue-to-grow',
            'excerpt_en'            => 'Investment remains one of the main priorities.',
            'content_en'            => 'Lorem ipsum.',
            'thumbnail_en'          => null,

            'title_id'              => 'Peluang Investasi Terus Berkembang',
            'slug_id'               => 'peluang-investasi-terus-berkembang',
            'excerpt_id'            => 'Investasi menjadi salah satu prioritas utama.',
            'content_id'            => 'Lorem ipsum.',
            'thumbnail_id'          => null,

            'meta_title_en'         => 'Investment',
            'meta_description_en'   => null,
            'meta_keywords_en'      => 'Investment',

            'meta_title_id'         => 'Investasi',
            'meta_description_id'   => null,
            'meta_keywords_id'      => 'Investasi',

            'author_name_en'        => 'ASEAN Hub',
            'author_name_id'        => 'ASEAN Hub',
            'published_at' => now(),
            'published_status' => 'Published',
            'views' => 0,

            'status_data' => 'Active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

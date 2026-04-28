<?php

namespace Database\Seeders;

use App\Models\SiteArea;
use Illuminate\Database\Seeder;

class SiteAreaSeeder extends Seeder
{
    public function run(): void
    {
        SiteArea::truncate();

        SiteArea::create([
            'title'             => 'Site Context & Connectivity',
            'description'       => 'The ASEAN Hub is strategically positioned within a network of key urban landmarks in South Jakarta, including Gelora Bung Karno (GBK), the ASEAN Secretariat, Taman Bendera Pusaka, and Taman Literasi at Blok M. This interconnected urban fabric highlights the sites role as a central node within a broader metropolitan context, enhancing accessibility, cultural integration, and regional significance.',
            'image'             => 'site-area/map-00.webp',
            'file_path'         => 'site-area/map-00.webp',
            'sort_order'        => 1,
            'status_data'       => 'Active',
        ]);

        SiteArea::create([
            'title'             => 'Masterplan ASEAN Hub',
            'description'       => 'The masterplan defines the ASEAN Hub through a structured arrangement of integrated functional zones, including mixed-use developments, government facilities, green open spaces, and public amenities. This spatial strategy ensures a balanced urban environment that supports mobility, sustainability, and long-term growth.',
            'image'             => 'site-area/map-01.webp',
            'file_path'         => 'site-area/map-01.webp',
            'sort_order'        => 2,
            'status_data'       => 'Active',
        ]);


        SiteArea::create([
            'title'             => 'Cultural Heritage Area',
            'description'       => 'The designated cultural heritage areas within the ASEAN Hub highlight buildings and sites of historical significance that are preserved as part of the urban development strategy. These heritage elements reinforce local identity while ensuring that modernization respects and integrates the existing cultural fabric.',
            'image'             => 'site-area/map-02.webp',
            'file_path'         => 'site-area/map-02.webp',
            'sort_order'        => 3,
            'status_data'       => 'Active',
        ]);
    }
}

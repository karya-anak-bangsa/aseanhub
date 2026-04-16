<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OpeningSpeeches;

class OpeningSpeechesSeeder extends Seeder
{
    public function run(): void
    {
        OpeningSpeeches::truncate();

        OpeningSpeeches::create([
            'name'      => 'Dr. Ir. Pramono Anung Wibowo, M.M',
            'position'  => 'Governor of DKI Jakarta',
            'message'   => 'Welcome to the ASEAN Hub International Design Competition, a collaborative platform that brings together creativity, innovation, and regional identity. 
                                Jakarta, as a dynamic metropolitan city and gateway to Southeast Asia, is committed to fostering sustainable urban development that reflects cultural diversity and forward-thinking design. 
                                Through this competition, we invite young architects, designers, and visionaries across ASEAN to contribute ideas that will shape the future of urban living integrating functionality, environmental responsibility, and community engagement. 
                                We believe that great cities are built not only with infrastructure, but with ideas, collaboration, and shared vision. Let us work together to build a more inclusive, resilient, and inspiring ASEAN.',
            'photo'     => 'opening-speeches/opening-01.webp',
            'order'     => 1
        ]);

        OpeningSpeeches::create([
            'name'      => 'H. Rano Karno, S.I.P.',
            'position'  => 'Deputy Governor of DKI Jakarta',
            'message'   => 'The ASEAN Hub is more than just a space, it is a symbol of collaboration, creativity, and unity among Southeast Asian nations. 
                                This competition serves as a bridge for young talents to showcase their ideas and contribute to real urban challenges through design innovation. 
                                We encourage participants to explore solutions that are not only visually compelling, but also socially impactful and environmentally sustainable. 
                                Jakarta welcomes your ideas, your creativity, and your vision for a better future.',
            'photo'     => 'opening-speeches/opening-02.webp',
            'order'     => 2
        ]);

        OpeningSpeeches::create([
            'name'      => 'Marulina Dewi S.STP., MPA.',
            'position'  => 'Head of the Regional Cooperation Bureau',
            'message'   => 'The ASEAN Hub represents a strategic effort to strengthen regional collaboration through design and innovation. 
                                This competition is designed to engage multidisciplinary perspectives in addressing urban challenges within the ASEAN context. 
                                We aim to create a platform where ideas can evolve into actionable concepts that support sustainable development and regional connectivity. 
                                We look forward to seeing innovative proposals that reflect both local identity and global relevance.',
            'photo'     => 'opening-speeches/opening-03.webp',
            'order'     => 3
        ]);
    }
}

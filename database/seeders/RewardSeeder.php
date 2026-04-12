<?php

namespace Database\Seeders;

use App\Models\Reward;
use Illuminate\Database\Seeder;

class RewardSeeder extends Seeder
{
    public function run(): void
    {
        Reward::create([
            'title'         => '1st Winner',
            'amount'        => '10000',
            'currency'      => 'USD',
            'information'   => null,
            'order'         => '1'
        ]);
        Reward::create([
            'title'         => '2nd Winner',
            'amount'        => '7500',
            'currency'      => 'USD',
            'information'   => null,
            'order'         => '2'
        ]);
        Reward::create([
            'title'         => '3rd Winner',
            'amount'        => '5000',
            'currency'      => 'USD',
            'information'   => null,
            'order'         => '3'
        ]);
        Reward::create([
            'title'         => 'Honorary Award',
            'amount'        => '3000',
            'currency'      => 'USD',
            'information'   => null,
            'order'         => '4'
        ]);
    }
}

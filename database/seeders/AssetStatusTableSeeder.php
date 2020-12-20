<?php
/**
 * FILE AssetStatusTableSeeder.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 10:53 PM
 */

namespace Database\Seeders;

use App\Models\AssetStatus;
use Illuminate\Database\Seeder;

class AssetStatusTableSeeder extends Seeder
{
    public function run()
    {
        $assetStatuses = [
            [
                'id'         => 1,
                'name'       => 'Available',
                'created_at' => '2020-12-15 23:40:41',
                'updated_at' => '2020-12-15 23:40:41',
            ],
            [
                'id'         => 2,
                'name'       => 'Not Available',
                'created_at' => '2020-12-15 23:40:41',
                'updated_at' => '2020-12-15 23:40:41',
            ],
            [
                'id'         => 3,
                'name'       => 'Broken',
                'created_at' => '2020-12-15 23:40:41',
                'updated_at' => '2020-12-15 23:40:41',
            ],
            [
                'id'         => 4,
                'name'       => 'Out for Repair',
                'created_at' => '2020-12-15 23:40:41',
                'updated_at' => '2020-12-15 23:40:41',
            ],
        ];

        AssetStatus::insert($assetStatuses);
    }
}

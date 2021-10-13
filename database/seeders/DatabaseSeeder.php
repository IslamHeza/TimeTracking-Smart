<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => 'Demo Project-1', 'description' => 'Demo Project-1 Description', 'start_date' => '2021-10-12 10:30:00', 'end_date' => '2021-10-12 20:00:00','color'=>'#f05050'],
            ['title' => 'Demo Project-2', 'description' => 'Demo Project-2 Description', 'start_date' => '2021-10-13 10:30:00', 'end_date' => '2021-10-13 18:45:00','color'=>'#66BB6A'],
            ['title' => 'Demo Project-3', 'description' => 'Demo Project-3 Description', 'start_date' => '2021-10-14 10:30:00', 'end_date' => '2021-10-15 15:20:00','color'=>'#00BCD4'],
            ['title' => 'Demo Project-4', 'description' => 'Demo Project-4 Description', 'start_date' => '2021-10-17 10:30:00', 'end_date' => '2021-10-20 20:12:00','color'=>'#f05050'],
        ];
        foreach ($data as $key => $value) {
            Project::create($value);
        }
    }
}

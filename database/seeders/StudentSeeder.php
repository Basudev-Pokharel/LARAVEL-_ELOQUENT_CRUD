<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $data = [
            ['name' => 'Alice Johnson', 'email' => 'alice.johnson@example.com', 'age' => 25, 'city' => 'Helsinki'],
            ['name' => 'Brian Smith', 'email' => 'brian.smith@example.com', 'age' => 30, 'city' => 'Espoo'],
            ['name' => 'Clara Lee', 'email' => 'clara.lee@example.com', 'age' => 28, 'city' => 'Tampere'],
            ['name' => 'David Kim', 'email' => 'david.kim@example.com', 'age' => 22, 'city' => 'Vantaa'],
            ['name' => 'Ella Brown', 'email' => 'ella.brown@example.com', 'age' => 27, 'city' => 'Oulu'],
            ['name' => 'Finn Anders', 'email' => 'finn.anders@example.com', 'age' => 31, 'city' => 'Jyväskylä'],
            ['name' => 'Grace Li', 'email' => 'grace.li@example.com', 'age' => 26, 'city' => 'Lahti'],
            ['name' => 'Henry White', 'email' => 'henry.white@example.com', 'age' => 29, 'city' => 'Kuopio'],
            ['name' => 'Isla Green', 'email' => 'isla.green@example.com', 'age' => 24, 'city' => 'Pori'],
            ['name' => 'Jack Black', 'email' => 'jack.black@example.com', 'age' => 32, 'city' => 'Lappeenranta'],
            ['name' => 'Kara Adams', 'email' => 'kara.adams@example.com', 'age' => 23, 'city' => 'Vaasa'],
            ['name' => 'Liam Scott', 'email' => 'liam.scott@example.com', 'age' => 28, 'city' => 'Rovaniemi'],
            ['name' => 'Mia Turner', 'email' => 'mia.turner@example.com', 'age' => 27, 'city' => 'Seinäjoki'],
            ['name' => 'Noah Hall', 'email' => 'noah.hall@example.com', 'age' => 30, 'city' => 'Kotka'],
            ['name' => 'Olivia Young', 'email' => 'olivia.young@example.com', 'age' => 26, 'city' => 'Salo'],
            ['name' => 'Peter Evans', 'email' => 'peter.evans@example.com', 'age' => 29, 'city' => 'Joensuu'],
            ['name' => 'Quinn Hill', 'email' => 'quinn.hill@example.com', 'age' => 25, 'city' => 'Hyvinkää'],
            ['name' => 'Ruby Wright', 'email' => 'ruby.wright@example.com', 'age' => 24, 'city' => 'Porvoo'],
            ['name' => 'Sam Baker', 'email' => 'sam.baker@example.com', 'age' => 31, 'city' => 'Kokkola'],
            ['name' => 'Tara Davis', 'email' => 'tara.davis@example.com', 'age' => 28, 'city' => 'Raahe'],
        ];

        foreach ($data as $item) {

            Student::create($item);
        }
    }
}

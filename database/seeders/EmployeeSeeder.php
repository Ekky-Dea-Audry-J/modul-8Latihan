<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmployeeSeeder extends Seeder
{
/**
* Run the database seeds.
*/
// public function run(): void
//     {
//         DB::table('employees')->insert([
//             [
//                 'firstname' => 'Purnama',
//                 'lastname' => 'Anaking',
//                 'email'=> 'purnama.anaking@gmail.com',
//                 'age' => 20,
//                 'position_id' => 1
//             ],
//             [
//                 'firstname' => 'Adzanil',
//                 'lastname' => 'Rachmadhi',
//                 'email'=> 'adzanil.rachmadhi@gmail.com',
//                 'age' => 25,
//                 'position_id' => 2
//             ],
//             [
//                 'firstname' => 'Berlian',
//                 'lastname' => 'Rahmy',
//                 'email'=> 'berlian.rahmy@gmail.com',
//                 'age' => 23,
//                 'position_id' => 3
//             ],
//         ]);
//     }
// }
public function run(): void
{
    DB::table('barangs')->insert([
        [
            'kodebarang' => '1A',
            'namabarang' => 'Sepatu A',
            'hargabarang' => 250000,
            'deskripsibarang' => 'Flat Shoes',
            'satuan_id' => 1,
        ],
        [
            'kodebarang' => '2B',
            'namabarang' => 'Sepatu B',
            'hargabarang' => 400000,
            'deskripsibarang' => 'Wedges',
            'satuan_id' => 2,
        ],
    ]);
}
}

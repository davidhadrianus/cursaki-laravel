<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            [
                'id' => 1,
                'key' => 'sta_849986a224d245b99',
                'title' => 'Bengo',
                'slug' => 'bengo',
                'code' => 'BGO',
                'population' => 462800,
                'created_at' => '2023-05-21 09:16:21',
                'updated_at' => '2023-05-21 09:16:21',
                'deleted_at' => NULL,
            ],
            [
                'id' => 2,
                'key' => 'sta_d2e0041fd90a4c52b',
                'title' => 'Benguela',
                'slug' => 'benguela',
                'code' => 'BGU',
                'population' => 2540000,
                'created_at' => '2023-05-21 09:19:02',
                'updated_at' => '2023-05-21 09:19:02',
                'deleted_at' => NULL,
            ],
            [
                'id' => 3,
                'key' => 'sta_9f934d9f07a04b31b',
                'title' => 'Bié',
                'slug' => 'bie',
                'code' => 'BIE',
                'population' => 1559000,
                'created_at' => '2023-05-21 09:38:55',
                'updated_at' => '2023-05-21 09:38:55',
                'deleted_at' => NULL,
            ],
            [
                'id' => 4,
                'key' => 'sta_ab6784b05b4543bba',
                'title' => 'Cabinda',
                'slug' => 'cabinda',
                'code' => 'CAB',
                'population' => 688300,
                'created_at' => '2023-05-21 09:43:23',
                'updated_at' => '2023-05-21 09:43:23',
                'deleted_at' => NULL,
            ],
            [
                'id' => 5,
                'key' => 'sta_2b713b6405e44e39a',
                'title' => 'Cunene',
                'slug' => 'cunene',
                'code' => 'CUE',
                'population' => 1060000,
                'created_at' => '2023-05-21 09:44:13',
                'updated_at' => '2023-05-21 09:44:13',
                'deleted_at' => NULL,
            ],
            [
                'id' => 6,
                'key' => 'sta_59fd975b8c7b4a228',
                'title' => 'Huambo',
                'slug' => 'huambo',
                'code' => 'HUA',
                'population' => 2773000,
                'created_at' => '2023-05-21 09:45:32',
                'updated_at' => '2023-05-21 09:45:32',
                'deleted_at' => NULL,
            ],
            [
                'id' => 7,
                'key' => 'sta_c930827791c8480cb',
                'title' => 'Huila',
                'slug' => 'huila',
                'code' => 'HUI',
                'population' => 2767000,
                'created_at' => '2023-05-21 09:47:11',
                'updated_at' => '2023-05-21 09:47:11',
                'deleted_at' => NULL,
            ],
            [
                'id' => 8,
                'key' => 'sta_5842ff72b63e43fda',
                'title' => 'Namibe',
                'slug' => 'namibe',
                'code' => 'NAM',
                'population' => 479000,
                'created_at' => '2023-05-21 09:47:47',
                'updated_at' => '2023-05-21 09:47:47',
                'deleted_at' => NULL,
            ],
            [
                'id' => 9,
                'key' => 'sta_da4a8cb9783144489',
                'title' => 'Lunda Norte',
                'slug' => 'lunda-norte',
                'code' => 'LNO',
                'population' => 1259000,
                'created_at' => '2023-05-21 09:48:12',
                'updated_at' => '2023-05-21 09:48:12',
                'deleted_at' => NULL,
            ],
            [
                'id' => 10,
                'key' => 'sta_0306aeed65e24f11b',
                'title' => 'Lunda Sul',
                'slug' => 'lunda-sul',
                'code' => 'LSU',
                'population' => 727000,
                'created_at' => '2023-05-21 09:48:35',
                'updated_at' => '2023-05-21 09:48:35',
                'deleted_at' => NULL,
            ],
            [
                'id' => 11,
                'key' => 'sta_b37575b83e5645319',
                'title' => 'Malanje',
                'slug' => 'malanje',
                'code' => 'MAL',
                'population' => 968000,
                'created_at' => '2023-05-21 09:50:29',
                'updated_at' => '2023-05-21 09:50:29',
                'deleted_at' => NULL,
            ],
            [
                'id' => 12,
                'key' => 'sta_19febeb8e06e40c5a',
                'title' => 'Moxico',
                'slug' => 'moxico',
                'code' => 'MOX',
                'population' => 1067000,
                'created_at' => '2023-05-21 09:51:32',
                'updated_at' => '2023-05-21 09:51:32',
                'deleted_at' => NULL,
            ],
            [
                'id' => 13,
                'key' => 'sta_ac21521b346c465d9',
                'title' => 'Uíge',
                'slug' => 'uige',
                'code' => 'UIG',
                'population' => 1551000,
                'created_at' => '2023-05-21 09:52:17',
                'updated_at' => '2023-05-21 09:52:17',
                'deleted_at' => NULL,
            ],
            [
                'id' => 14,
                'key' => 'sta_77dd4f76c9e947e2b',
                'title' => 'Zaire',
                'slug' => 'zaire',
                'code' => 'ZAI',
                'population' => 769000,
                'created_at' => '2023-05-21 09:53:00',
                'updated_at' => '2023-05-21 09:53:00',
                'deleted_at' => NULL,
            ],
            [
                'id' => 15,
                'key' => 'sta_84db9967377f445f9',
                'title' => 'Cuanza Norte',
                'slug' => 'cuanza-norte',
                'code' => 'CAN',
                'population' => 526000,
                'created_at' => '2023-05-21 09:55:26',
                'updated_at' => '2023-05-21 09:55:26',
                'deleted_at' => NULL,
            ],
            [
                'id' => 16,
                'key' => 'sta_bcd8ebf405ed42b9b',
                'title' => 'Cuanza Sul',
                'slug' => 'cuanza-sul',
                'code' => 'CUS',
                'population' => 1570000,
                'created_at' => '2023-05-21 09:56:58',
                'updated_at' => '2023-05-21 09:56:58',
                'deleted_at' => NULL,
            ],
            [
                'id' => 17,
                'key' => 'sta_8220e5f619844beb9',
                'title' => 'Luanda',
                'slug' => 'luanda',
                'code' => 'LUA',
                'population' => 8413000,
                'created_at' => '2023-05-21 10:02:26',
                'updated_at' => '2023-05-21 10:02:26',
                'deleted_at' => NULL,
            ],
            [
                'id' => 18,
                'key' => 'sta_6afc306e47494598a',
                'title' => 'Cuando Cubango',
                'slug' => 'cuando-cubango',
                'code' => 'CCU',
                'population' => 738000,
                'created_at' => '2023-05-21 10:09:05',
                'updated_at' => '2023-05-21 10:09:05',
                'deleted_at' => NULL,
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $institutions = [
            [
                'key' => Uuid::uuid4()->getHex(),
                'name' => 'Institution 1',
                'slug' => Str::slug('institution 1'),
                'description' => 'Institution 1 description',
                'is_active' => true,
                'nif' => Str::random(8),
                'user_id' => 1
            ],
            [
                'key' => Uuid::uuid4()->getHex(),
                'name' => 'Institution 2',
                'slug' => Str::slug('institution 2'),
                'description' => 'Institution 2 description',
                'is_active' => true,
                'nif' => Str::random(8),
                'user_id' => 2
            ]
        ];

        DB::table('institutions')->insert($institutions);
    }
}

<?php

namespace Database\Seeders;

use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use App\Enums\CourseLevelEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'key' => Uuid::uuid4()->getHex(),
                'name' => 'PHP',
                'slug' => Str::slug('php'),
                'description' => 'PHP description',
                'is_active' => true,
                'is_free' => true,
                'level' => CourseLevelEnum::BEGINNER,
                'coursable_type' => 'App\Models\Institution',
                'coursable_id' => 1
            ],
            [
                'key' => Uuid::uuid4()->getHex(),
                'name' => 'Laravel',
                'slug' => Str::slug('laravel'),
                'description' => 'Laravel description',
                'is_active' => true,
                'is_free' => true,
                'level' => CourseLevelEnum::BEGINNER,
                'coursable_type' => 'App\Models\Institution',
                'coursable_id' => 1
            ],
            [
                'key' => Uuid::uuid4()->getHex(),
                'name' => 'Python',
                'slug' => Str::slug('python'),
                'description' => 'Python description',
                'is_active' => true,
                'is_free' => true,
                'level' => CourseLevelEnum::BEGINNER,
                'coursable_type' => 'App\Models\Institution',
                'coursable_id' => 2
            ],
            [
                'key' => Uuid::uuid4()->getHex(),
                'name' => 'Java',
                'slug' => Str::slug('java'),
                'description' => 'Java description',
                'is_active' => true,
                'is_free' => true,
                'level' => CourseLevelEnum::BEGINNER,
                'coursable_type' => 'App\Models\Institution',
                'coursable_id' => 2
            ]
        ];

        DB::table('courses')->insert($courses);
    }
}

<?php

namespace App\Models;

use App\Enums\GenderEnum;
use App\Trait\HasKey;
use App\Trait\HasSlug;
use App\Enums\TeacherTypeEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory, HasKey, HasSlug;

    protected $fillable = [
        'key',
        'name',
        'nickname',
        'slug',
        'nif',
        'description',
        'is_active',
        'type',
        'gender',
        'user_id'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'type' => TeacherTypeEnum::class,
        'gender' => GenderEnum::class
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->morphOne(Address::class, 'addressable');
    }

    public function contacts()
    {
        return $this->morphMany(Contact::class, 'contactable');
    }

    /** 
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     * courses of teacher. Created by teacher
    */
    public function courses()
    {
        return $this->morphMany(Course::class, 'coursable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * courses has teacher as teacher but may be created by another teacher or institution
     */
    public function teacherCourses()
    {
        return $this->belongsToMany(
            Course::class,
            'course_teacher',
            'course_id',
            'teacher_id'
        );
    }

}

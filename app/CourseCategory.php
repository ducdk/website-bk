<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    protected $table = 'courses_category';

    protected $fillable = [
        'id',
        'name',
        'displayname',
        'description',
        'timemodified',
    ];

    public function posts()
    {
        return $this->belongsToMany(Course::class, 'courses_courses_category');
    }
}

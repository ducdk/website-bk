<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'id',
        'fullname',
        'displayname',
        'summary',
        'format',
        'startdate',
        'enddate',
        'visible',
        'categoryid',
        'groupmode',
        'timecreated',
        'timemodified',
    ];

    public function categories()
    {
        return $this->belongsToMany(CourseCategory::class, 'courses_courses_category');
    }
}

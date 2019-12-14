<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Helper\Helper;

class PostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:call';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->callCategoryMoodle();
        $this->callCourseMoodle();
    }


    public function callCategoryMoodle() {
        $url = env('MOODLE_URL').'&wsfunction=core_course_get_categories&moodlewsrestformat=json';
        $client = new \GuzzleHttp\Client();
        $request = $client->request('GET', $url);
        $response = $request->getBody();
        $data = json_decode($response, true);
        foreach ($data as $courseCategory) {
            $courseCategory = (object) $courseCategory;
            $temp = \App\CourseCategory::find($courseCategory->id);
            if (!isset($temp)) {
                \App\CourseCategory::create(array(
                    'id' => $courseCategory->id,
                    'name' => $courseCategory->name,
                    'description' => $courseCategory->description,
                    'timemodified' => $courseCategory->timemodified,
                ));
            }
        }
    }


    public function callCourseMoodle() {
        $url = env('MOODLE_URL').'&wsfunction=core_course_get_courses&moodlewsrestformat=json';
        $client = new \GuzzleHttp\Client();
        $request = $client->request('GET', $url);
        $response = (string) $request->getBody();
        $data = json_decode($response, true);
        foreach ($data as $course) {
            $course = (object) $course;
            $temp = \App\Course::find($course->id);
            if (!isset($temp) && $course->format == 'topics') {
                \App\Course::create(array(
                    'id' => $course->id,
                    'fullname' => $course->fullname,
                    'displayname' => $course->displayname,
                    'summary' => $course->summary,
                    'categoryid' => $course->categoryid,
                    'format' => $course->format,
                    'startdate' => $course->startdate,
                    'enddate' => $course->enddate,
                    'visible' => $course->visible,
                    'groupmode' => $course->groupmode,
                    'timecreated' => $course->timecreated,
                    'timemodified' => $course->timemodified,
                ));
            }
        }
    }
}

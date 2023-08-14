<?php

use App\Models\Course;
use App\Models\User;
use App\Enum\PaymentStatus;
use App\Models\UserCourse;
use Illuminate\Database\Migrations\Migration;

class AddNewCoursesToOldUsers extends Migration
{

    public function up()
    {
        $users = User::whereHas('courses', function ($query) {
            $query->where('package_id', '!=', null)->where('orderStatus', PaymentStatus::PAID);
        })->get();
        $courses = Course::all();
        foreach ($courses as $course) {
            foreach ($users as $user) {
                $isUserExist = UserCourse::where('user_id', $user->id)->where('course_id', $course->id)->first();
                if (!$isUserExist) {
                    UserCourse::create([
                        'user_id' => $user->id,
                        'course_id' => $course->id,
                        'type' => 'free',
                        'referenceNumber' => '123',
                        'merchantRefNumber' => '123',
                        'orderAmount' => '123',
                        'paymentAmount' => '123',
                        'fawryFees' => '123',
                        'paymentMethod' => 'free',
                        'orderStatus' => 'PAID',
                    ]);
                }
            }
        }
    }
}

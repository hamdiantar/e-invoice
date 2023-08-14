<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CourseCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function ($course) {
                $episode = $course->episodes->where('is_introduction', 1)->first();
                if ($episode) {
                   // $videoData = $episode->getVideoInformation();
                    $videoId = str_replace('/videos/', '', $episode->video_id_on_vimo);
                }
                return [
                    'id' => $course->id,
                    'course_name' => $course->course_name,
                    'teacher_name' => $course->teacher_name,
                    'number_of_hours' => $course->number_of_hours,
                    'price' => $course->price,
                    'image_path' => $course->image_path,
                    'number_of_episodes' => $course->episodes->count(),
                    'category_id' => $course->category_id,
                    'link' => isset($videoId)  ? "https://player.vimeo.com/video/".$videoId : null,
                    'notes' => $course->notes
                ];
            }),
            'pagination' => [
                'total' => $this->total(),
                'count' => $this->count(),
                'per_page' => $this->perPage(),
                'current_page' => $this->currentPage(),
                'total_pages' => $this->lastPage()
            ],
        ];
    }
}

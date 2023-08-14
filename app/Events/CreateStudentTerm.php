<?php

namespace App\Events;

use App\Models\StudentTerm;
use App\Models\Term;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CreateStudentTerm
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($model)
    {
        $current_term = Term::where("is_current", "=", 1)->first();

        StudentTerm::insert([
            "user_id" => $model->id,
            "term_id" => $current_term->id,
        ]);


        $model->created_by = user()->id;
    }
}

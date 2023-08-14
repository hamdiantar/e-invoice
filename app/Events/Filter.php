<?php

namespace App\Events;

use App\Models\Lecture;
use App\Models\User;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Filter
{
    use Dispatchable, SerializesModels;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($model)
    {
        $model->school_id = session()->get('current_school');
    }
}

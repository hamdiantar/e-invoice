<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class School
{
    use Dispatchable, SerializesModels;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($model)
    {
        $model->school_id = user()->school_id;
        if(isset($model->is_banned) && !$model->is_banned){
            $model->is_banned = 0;
        }
    }
}

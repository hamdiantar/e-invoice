<?php

namespace App\Console\Commands;

use App\Enum\PaymentStatus;
use App\Models\UserCourse;
use App\Services\FawryService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CheckPaymentStatus extends Command
{
    /**
     * @var string
     */
    protected $signature = 'fawry:check';

    /**
     * @var string
     */
    protected $description = 'check payment status in fawry';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Log::info('start fire cron job :) ');
        $this->info('start payment check, please wait');
        $fawryClient = app(FawryService::class);
        $userCourses = UserCourse::all();
        foreach ($userCourses as $userCourse) {
            $merchantRefNumber = $userCourse->merchantRefNumber;
            $response = $fawryClient->sendRequest($merchantRefNumber);
            if (isset($response['orderStatus'])) {
                $userCourse->update([
                    'orderStatus' => $response['orderStatus']
                ]);
            }
        }
    }
}

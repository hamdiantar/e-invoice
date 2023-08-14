<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Responses\ApiResponse;
use App\Services\MailJetService;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class IsEmailVerify
{
    /**
     * @var ApiResponse
     */
    protected $apiResponse;

    /**
     * @param ApiResponse $apiResponse
     */
    public function __construct(ApiResponse $apiResponse)
    {
        $this->apiResponse = $apiResponse;
    }

    public function handle($request, Closure $next)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return $next($request);
        }
        if ($user->isEmailVerified()) {
            return $next($request);
        }
        return $this->apiResponse->setCode(422)->setData([
            'url_resend_verification' => '#coming soon#',
            'email' => $user->email,
        ])->setMessages(['please verify your email'])->create();
    }
}

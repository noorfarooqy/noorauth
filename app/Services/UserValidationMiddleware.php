<?php

namespace Noorfarooqy\NoorAuth\Services;

use App\Contracts\UssdErrorCodes;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Noorfarooqy\NoorAuth\Services\NoorServices;

class UserValidationMiddleware extends NoorServices
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $user_type)
    {
        $user = $request->user();
        if ($user->force_password_reset && !in_array($request->route()?->getName(), config('noorauth.password_reset_exceptions_routes'))) {
            if (!$user?->is_system) {
                if ($request->expectsJson()) {
                    $this->setError("For security purpose you must reset your password.");
                    return $this->is_json ? $this->getResponse() : abort(403, $this->getMessage());
                }

                return Redirect::to(route('account.profile'));
            }
        }
        if ($user->is_system == $user_type) {

            return $next($request);
        }

        $this->request = $request;
        $this->setResponseType();

        $this->setError("The request cannot be completed. User verification has failed.",);
        return $this->is_json ? $this->getResponse() : abort(403, $this->getMessage());
    }
}

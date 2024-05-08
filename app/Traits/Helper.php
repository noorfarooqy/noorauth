<?php

namespace Noorfarooqy\NoorAuth\Traits;

use Illuminate\Support\Facades\Log;

trait Helper
{
    public function debugLog($message, $type = 'info')
    {
        if (env('APP_DEBUG') == true) {
            switch ($type) {
                case 'info':
                    Log::info($message);
                    break;
                case 'error':
                    Log::error($message);
                    break;
                default:
                    Log::info($message);
                    break;
            }
        }
    }

}

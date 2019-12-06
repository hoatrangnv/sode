<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Config;

class RunAll
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $configModel = new Config();
        $config = $configModel->getConfig();
        config(['config.title' => $config->title, 'config.description' => $config->description]);

        if (isset($_GET['amp']) && $_GET['amp'] == 1 ){
            config(['config.amp' => 1]);
        }

        return $next($request);
    }
}

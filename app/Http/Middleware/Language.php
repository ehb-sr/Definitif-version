<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 26-Apr-17
 * Time: 17:32
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class Language
{
    /**
     * The availables languages.
     *
     * @array $languages
     */
    protected $languages = ['en','fr','nl'];

    public function handle($request, Closure $next)
    {
        if (Session::has('applocale') AND array_key_exists(Session::get('applocale'), Config::get('languages'))) {
            App::setLocale(Session::get('applocale'));
        } else { // This is optional as Laravel will automatically set the fallback language if there is none specified
            App::setlocale(Config::get('app.fallback_locale'));
        }
        return $next($request);
    }
}
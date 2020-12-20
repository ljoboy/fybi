<?php
/**
 * FILE SetLocale.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 6:16 PM
 */
namespace App\Http\Middleware;

use Closure;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        if (request('change_language')) {
            session()->put('language', request('change_language'));
            $language = request('change_language');
        } elseif (session('language')) {
            $language = session('language');
        } elseif (config('panel.primary_language')) {
            $language = config('panel.primary_language');
        }

        if (isset($language)) {
            app()->setLocale($language);
        }

        return $next($request);
    }
}

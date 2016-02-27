<?php 
namespace App\Http\Middleware;
use Closure, Session;
class App {
    /**
     * The availables languages.
     *
     * @array $languages
     */
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd(app()->getLocale(), session('locale'));
        if ( session('locale') ) {
            // app()->getLocale()
            app()->setLocale(session('locale'));
        }
        return $next($request);
    }
}
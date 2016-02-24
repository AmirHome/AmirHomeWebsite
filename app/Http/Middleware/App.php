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
        app()->setLocale(session('locale'));
        return $next($request);
    }
}
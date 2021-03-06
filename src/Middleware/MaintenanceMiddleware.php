<?php
namespace BlueMountainTeam\LaravelGestionmaintenance\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
class MaintenanceMiddleware
{
    public function handle($request, Closure $next)
    {
        $status = maintenance_status();
        if ($status && auth()->check()) {
            //"bican/roles": "^2.1",
            if (!can('maintenance')) {
                if ($status == 1) {
                    Auth::logout();
                    return redirect(action('Auth\LoginController@login'))->with('error','Maintenance activée, connexion impossible !');
                }
            }
        }
        return $next($request);
    }
}
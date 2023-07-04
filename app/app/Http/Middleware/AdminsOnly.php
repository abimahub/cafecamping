<?php
// This is the middleware template to use for admins if 
// you don't put the 'can' code in AppServiceProvider.php
// 
// if not using this middleware, then alter the admin Routes middleware section
// in web.php from, eg: 
// Route::post('admin/posts', [AdminPostController::class, 'store'])->middleware('admin');
// To:
// Route::post('admin/posts', [AdminPostController::class, 'store'])->middleware('can:admin');
//
// the 'can' middleware is shipped with laravel, so this should already be in the kernel file:
// 'can' => \Illuminate\Auth\Middleware\Authorize::class,

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminsOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->cannot('admin'))
         { 
            abort(Response::HTTP_FORBIDDEN); 
        }
        
    
        return $next($request);
    }
}

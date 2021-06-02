<?php

namespace App\Http\Middleware;

use Closure;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Facades\Route;

class payementVerifyMidleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $route = Route::currentRouteName();

        switch ($route) {
            case 'auth-form':
                if(CartFacade::isEmpty()) {
                    return redirect()->route('shop');
                }
                break;
                
            case 'transaction-form':
                if(CartFacade::isEmpty() && !$request->session()->has('user')) {
                    return redirect()->route('shop');
                }
                break;
        }


        return $next($request);
    }
}

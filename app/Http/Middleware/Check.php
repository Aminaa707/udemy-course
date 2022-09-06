<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)

    {
        // if ($request->check <= 20) {
        //     return redirect("email");
        // }

        // return $next($request);


        $array = [
            "Amina",
            "Kona",
            "Ali",
        ];

        if (in_array($request->check, $array)) {
            return $next($request);
        } else {
            return redirect()->to('/');
        }
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class VerificaIdade
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
        $idade = Auth::user()->datanasc;
        $datatual = Carbon::now();
        $difdat = $datatual->diffInYears($idade);
        if($difdat <= 18){
            echo "Voce é menor de idade";
        }
          

        return $next($request);
    }
}

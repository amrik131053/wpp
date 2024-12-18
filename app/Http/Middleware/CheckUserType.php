<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use Illuminate\View\View;
class CheckUserType
{
    
    public function handle(Request $request, Closure $next,$type): Response
    {
        $type = (int) $type;
          if(Auth::check() && Auth::user()->user_type===$type)
        {
            return $next($request);
           
        }
        else{
        return redirect('/not-found');
        }
    }
}

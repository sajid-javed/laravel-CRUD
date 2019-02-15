<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;
class test {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        
//        $users = $request->set('users');
      //  $users = $request->get('users');
        
       $request->session()->put('users', 'test');
        $request->session()->forget('users');
        print_r(session()->all()) ;
        exit();
        if($request->session()->has('users'))
            {
            echo $request->session()->get('users');
//            return view('hello');
        } 
        else
            {        
         return redirect('http://localhost/firstproj/demo/15');
           
        }
        return $next($request);
    }

}

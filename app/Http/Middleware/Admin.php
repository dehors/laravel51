<?php

namespace laravel51\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Session;

class Admin
{
    protected $auth;

    public function __construct(Guard $auth){
        $this ->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->id != 9){
            Session::flash('message-error', 'sin privilegios');
            return redirect()->to('admin');
        }
        return $next($request);
    }
}

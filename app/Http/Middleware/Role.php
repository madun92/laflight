<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ... $roles)
    {
        if ($this->hasRole($roles, $request)) {
            return $next($request);
        }
        return redirect('/')->with([
            'flash_message' => 'Sorry, You don\'t have permission to do this! ',
            'flash_message_important' => ''
            ]);
    }

    protected function hasRole($roles , $request){
        foreach ($roles as $role) {
            if ($request->user()->role->slug === $role)return true;
        }
        return false;
    }
}

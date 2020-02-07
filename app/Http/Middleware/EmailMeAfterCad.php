<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Mail;
use App\Mail\SolicitacaoCadastro;

class EmailMeAfterCad
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
        return $next($request);
    }

    public function terminate($request, $response)
    {
        Mail::to(env('MAIL_USERNAME'))->send(new SolicitacaoCadastro($request->all()));
    }
}

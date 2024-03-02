<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifySellerPhoneView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session('seller_phone') && session('seller')) {
            $seller = session('seller');
            $seller_phone = session('seller_phone');

            if ($seller->phone_number === $seller_phone) {
                return response()->redirectToRoute('select.seller.status');
            } else {
                return abort(403);
            }
        }
        return $next($request);
    }
}

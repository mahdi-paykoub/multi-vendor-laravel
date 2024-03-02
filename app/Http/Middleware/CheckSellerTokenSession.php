<?php

namespace App\Http\Middleware;

use App\Models\Seller;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckSellerTokenSession
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('seller_token')) {
            $token = session('seller_token');
            $seller = Seller::where('token', $token)->first();
            if ($seller) {
                return response()->redirectToRoute('seller.panel.index');
            }
        }
        return $next($request);
    }
}

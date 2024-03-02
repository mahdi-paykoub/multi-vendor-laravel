<?php

namespace App\Http\Middleware;

use App\Models\Seller;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckSellerPanelAccess
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('seller_token')) {
            return response()->redirectToRoute('sign.in.view');
        } elseif (session()->has('seller_token')) {
            $token = session('seller_token');
            $seller = Seller::where('token', $token)->first();
            if ($seller) {
                return $next($request);
            } else {
                return response()->redirectToRoute('sign.in.view');
            }
        }
    }
}

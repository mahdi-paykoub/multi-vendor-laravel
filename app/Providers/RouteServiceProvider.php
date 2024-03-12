<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::middleware(['web', 'can:admin_panel'])
                ->name('admin.')
                ->prefix('admin')
                ->group(base_path('routes/admin/admin.php'));
        });


        Route::bind('articleSinglePage', function ($value) {
            return Article::where('slug', $value)->firstOrFail();
        });
        Route::bind('singleProduct', function ($value) {
            return Product::where('slug', $value)->firstOrFail();
        });
        Route::bind('productCategorySlug', function ($value) {
            return ProductCategory::where('slug', $value)->firstOrFail();
        });
    }
}

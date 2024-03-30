<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Laravel\Passport\Console\ClientCommand;
use Laravel\Passport\Console\InstallCommand;
use Laravel\Passport\Console\KeysCommand;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Paginator::useBootstrap();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Schema::defaultStringLength(191);
        Passport::routes();
        $this->commands([
            InstallCommand::class,
            ClientCommand::class,
            KeysCommand::class,
        ]);

        View::composer('*', function ($view) {
            $cols = collect(Schema::getColumnListing('settings'))->filter(function ($e) {
                if (!array_search($e, [
                    'short_about',
                    'descriptive_about',
                    'privacy_policy',
                    'terms_condition',
                    'terms_condition_htag1',
                    'terms_condition_1',
                    'terms_condition_htag2',
                    'terms_condition_2',
                    'refund_policy',
                    'created_at',
                    'updated_at',
                ])) {
                    return $e;
                }
            })->all();

            // $setting = \App\Models\Setting::select($cols)->first();
            $setting = \App\Models\Setting::first();
            $topCate = \App\Models\Category::where('is_top_category', 1)->orderBy("id","asc")->limit(24)->get();
            $mostViewProducts = \App\Models\Product::where('status', 1)->where('view_count', '>', 0)->orderBy('view_count', 'DESC')->latest()->limit(12)->get();
            $view->with([
                'setting' => $setting,
                'topCate' => $topCate,
                'mostViewProducts' => $mostViewProducts,
            ]);
        });

        // View::composer('dashboard.*', function ($view) {
        //     $notifications = Notification::where('user_id',Auth::user()->id)
        //                                 ->orderBy('id','DESC')
        //                                 ->get();
        //     $view->with([
        //         'notifications'=> $notifications,
        //     ]);
        // });

        // Passport::tokensExpireIn(now()->addDays(15));
        // Passport::refreshTokensExpireIn(now()->addDays(30));
        // Passport::personalAccessTokensExpireIn(now()->addMonths(6));
    }
}

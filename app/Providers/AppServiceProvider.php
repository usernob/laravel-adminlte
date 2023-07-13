<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use NumberFormatter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive("format", function ($expression) {
            // $expression = intval($expression);
            // $curr = NumberFormatter::create("id_ID", NumberFormatter::CURRENCY);
            // $locale_cur = $curr->formatCurrency($expression, $curr->getSymbol(NumberFormatter::INTL_CURRENCY_SYMBOL));
            return "<?php echo number_format($expression, 0, ',', '.'); ?>";
        });
    }
}

<?php
namespace TheCodeBunny\ProductSocialShare\Providers;
/**
 * ProductSocialShareProvider
 *
 * @copyright Copyright © 2020 Amzbestsellers Brasil. All rights reserved.
 * @author    Carlos Gartner <contato@carlosgartner.com.br>
 */

use Illuminate\Support\ServiceProvider;

class ProductSocialShareProvider extends ServiceProvider
{
    public function boot()
    {
        // Register Config
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/system.php', 'core'
        );

        // Register Views
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'social_share');

        // Translations
        $this->loadJSONTranslationsFrom(__DIR__ . '/../Resources/lang');

        // Register Events
        $this->app->register(EventServiceProvider::class);
    }
}
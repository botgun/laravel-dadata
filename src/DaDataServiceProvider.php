<?php

namespace BotGun\DaData;

use Illuminate\Support\ServiceProvider;

class DaDataServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('dadata_organization', function () {
            return new SuggestionsOrganizationApi();
        });
        $this->app->singleton('dadata_address', function () {
            return new SuggestionsAddressApi();
        });
        $this->app->singleton('dadata_phone', function () {
            return new CleanerPhoneApi();
        });

        $this->app->singleton('dadata_cleaner', function () {
            return new CleanerApi();
        });
        $this->app->singleton('dadata_suggestions', function () {
            return new SuggestionsApi();
        });
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/dadata.php' => config_path('dadata.php')
        ]);
    }
}

<?php

namespace FlagIcons;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\MaintenanceModeManager;

class FlagIconsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register a route to serve the flags from the package directory
        Route::get('flag-icons/flags/{type}/{file}', function ($type, $file) {
            // Determine the directory based on the flag type (country or language)
            if ($type === 'country') {
                $path = __DIR__ . "/../public/flags/country_flags/{$file}";
            } elseif ($type === 'language') {
                $path = __DIR__ . "/../public/flags/lang_flags/{$file}";
            } else {
                abort(404); // If type is invalid, return a 404 response
            }

            // Check if the file exists and serve it
            if (file_exists($path)) {
                return response()->file($path);
            }

            abort(404); // If file doesn't exist, return a 404 response
        })->name('flag.icons');

        // Register Blade components
        Blade::component('flag-icon', \FlagIcons\FlagIcon::class);

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'flag-icons');
    }


    public function register()
    {
        $this->app->singleton('blade.compiler', function ($app) {
            return new \Illuminate\View\Compilers\BladeCompiler(
                $app['files'],
                $app['config']['view.compiled']
            );
        });

        $this->app->singleton(\Illuminate\Contracts\Foundation\MaintenanceMode::class, function ($app) {
            return $app->make(\Illuminate\Foundation\MaintenanceModeManager::class);
        });

        $this->app->singleton('cache', function ($app) {
            return Cache::getFacadeRoot();
        });
    }
}

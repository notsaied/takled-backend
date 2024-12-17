<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        commands: __DIR__.'/../routes/console.php',
        using: function () {
            Route::middleware('web')
                ->namespace('App\Http\Controllers\Client')
                ->group(base_path('routes/client.php'));

            Route::prefix('admin')
                ->middleware('web')
                ->prefix('ec-admin')
                ->namespace('App\Http\Controllers\Admin')
                ->group(base_path('routes/admin.php'));

                Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except: [

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

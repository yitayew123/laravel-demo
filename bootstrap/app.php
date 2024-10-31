<?php
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\CheckAge2;
use App\Http\Middleware\CheckCountry;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //Option 1 ----- Global Middleware
        // $middleware->append(CheckAge::class);
        // option 2 ---- Global Middleware
        // $middleware->use([
            // \App\Http\Middleware\CheckAge::class  ]);
        // $middleware->appendToGroup("check1",[
        //     CheckCountry::class,
        //     CheckAge2::class 
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

<?php

namespace App\Providers;

// app/Providers/PostcodeServiceProvider.php

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;
use JustSteveKing\LaravelPostcodes\Service\PostcodeService;

// ...


class PostcodeServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //
    }
    public function register()
{
    $this->app->bind(PostcodeService::class, function ($app) {
        return new PostcodeService(new \GuzzleHttp\Client());
    });
}

}

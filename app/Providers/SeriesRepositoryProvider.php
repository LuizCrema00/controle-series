<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\EloquentSeriesRepository;
use App\Repositories\SeriesRepository;

class SeriesRepositoryProvider extends ServiceProvider
{
    public array $bindings = [
        SeriesRepository::class => EloquentSeriesRepository::class
    ];
}

<?php

namespace CentralityLabs\SparkTailwindCssPreset;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;
use Laravel\Ui\UiCommand;

class SparkTailwindCssPresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        UiCommand::macro('spark-tailwindcss', function ($command) {
            SparkTailwindCssPreset::install();

            $command->info('Tailwind CSS scaffolding for Laravel Spark installed successfully.');
            $command->info('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        Paginator::defaultView('pagination::default');
        Paginator::defaultSimpleView('pagination::simple-default');
    }
}

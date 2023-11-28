<?php

namespace App\Providers;

use App\Interfaces\CategoryInterface;
use App\Interfaces\ItemInterface;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\SubCategoryInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\ItemRepository;
use App\Repositories\SubCategoryRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(CategoryInterface::class,CategoryRepository::class);
        $this->app->bind(SubCategoryInterface::class,SubCategoryRepository::class);
        $this->app->bind(ItemInterface::class,ItemRepository::class);
    }
}

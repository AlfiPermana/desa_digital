<?php

namespace App\Providers;

use App\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Interfaces\HeadOfFamilyRepositoryInterface;
use App\Repositories\HeadOfFamilyRepository;
use App\Interfaces\FamilyMemberRepositoryInterface;
use App\Repositories\FamilyMemberRepository;
use App\Interfaces\SocialAssistanceRepositoryInterface;
use App\Repositories\SocialAssistanceRepository;
use App\Interfaces\SocialAssistanceRecipientRepositoryInterface;
use App\Repositories\SocialAssistanceRecipientRepository;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\EventRepositoryInterface;
use App\Repositories\EventRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );

        $this->app->bind(
            HeadOfFamilyRepositoryInterface::class,
            HeadOfFamilyRepository::class
        );

        $this->app->bind(
            FamilyMemberRepositoryInterface::class,
            FamilyMemberRepository::class
        );

        $this->app->bind(
            SocialAssistanceRepositoryInterface::class,
            SocialAssistanceRepository::class
        );

        $this->app->bind(
            SocialAssistanceRecipientRepositoryInterface::class,
            SocialAssistanceRecipientRepository::class
        );

        $this->app->bind(
            EventRepositoryInterface::class,
            EventRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

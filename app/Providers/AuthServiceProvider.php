<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
       // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\User' => 'App\Policies\MasterPolicy',
        'App\Article' => 'App\Policies\ArticlePolicy',
        'App\Document' => 'App\Policies\DocumentPolicy',
        'App\Event' => 'App\Policies\EventPolicy',
        'App\Bourse' => 'App\Policies\BoursePolicy',
        'App\User' => 'App\Policies\EnseignantPolicy',
        'App\User' => 'App\Policies\EtudiantPolicy',

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}

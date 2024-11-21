<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Broadcast::routes();

        /*
         * Ici, vous pouvez définir vos règles d'authentification de canaux.
         * Si vous utilisez des canaux privés, ajoutez-les dans ce fichier.
         */
        require base_path('routes/channels.php');
    }
}

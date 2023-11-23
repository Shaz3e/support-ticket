<?php

namespace Shaz3e\SupportTicket\Providers;

use Illuminate\Support\ServiceProvider;
use Shaz3e\SupportTicket\Console\SupportTicketSeedCommand;

class SupportTicketServiceProvider extends ServiceProvider
{
   /**
    * Register service binding
    */
   public function register()
   {
      // Register Helper Functions
   }

   /**
    * Bootstrap services.
    * 
    * @return void
    */

   public function boot()
   {
      /**
       * Console Commads
       */
      if ($this->app->runningInConsole()) {

         /**
          * Publish assets
          * $command php artisan vendor:publish --tag=support-ticket-assets
          */
         // $this->publishes([
         //    __DIR__.'/../resources/assets/css' => public_path('vendor/support-ticket/css'),
         //    __DIR__.'/../resources/assets/js' => public_path('vendor/support-ticket/js'),

         // ], 'support-ticket-assets');

         /**
          * Publish config
          * $command php artisan vendor:publish --tag=support-ticket-config
          */
         $this->publishes([
            __DIR__ . '/../config/support-ticket.php' => config_path('support-ticket.php'),
         ], 'support-ticket-config');

         /**
          * Publish migrations
          * $command php artisan vendor:publish --tag=support-ticket-migrations
          */
         $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations')
         ], 'support-ticket-migrations');


         $this->commands([
            SupportTicketSeedCommand::class,
         ]);


         /**
          * Publish views
          * $command php artisan vendor:publish --tag=support-ticket-views
          */
         $this->publishes([
            __DIR__ . '/../views' => resource_path('views/vendor/shaz3e'),
         ], 'support-ticket-views');
      }

      /**
       * Load Routes with/without middleware
       */
      $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');

      /**
       * Load views
       */
      $this->loadViewsFrom(__DIR__ . '/../views', 'support-ticket');

      /**
       * Load package migrations
       */
      $this->loadMigrationsFrom(__DIR__ . '/../migrations');
   }
}

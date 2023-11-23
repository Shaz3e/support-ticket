<?php

namespace Shaz3e\SupportTicket\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SupportTicketSeedCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'support-ticket:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed the database with suppor ticket seeders';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Seed data for Support Ticket Status
        Artisan::call('db:seed', [
            '--class' => 'Shaz3e\SupportTicket\Database\Seeders\SupportTicketStatusSeeder',
        ]);

        // Seed data for Support Ticket Priority
        Artisan::call('db:seed', [
            '--class' => 'Shaz3e\SupportTicket\Database\Seeders\TicketPrioritySeeder',
        ]);

        $this->info('Support ticket data seeded successfully!');
    }
}

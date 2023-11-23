<?php

namespace Shaz3e\SupportTicket\Database\Seeders;

use Illuminate\Database\Seeder;
use Shaz3e\SupportTicket\Models\SupportTicketPriority;

class TicketPrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        $priorities = [
            ['name' => 'Low'],
            ['name' => 'Medium'],
            ['name' => 'High'],
            ['name' => 'Urgent'],
            ['name' => 'Emergency'],
            ['name' => 'Critical'],
        ];
        
        SupportTicketPriority::insert($priorities);
    }
}
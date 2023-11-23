<?php

namespace Shaz3e\SupportTicket\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_number',
        'support_ticket_status_id',
        'support_ticket_priority_id',
        'user_id',
        'title',
        'message',
        'attachments',
        'assigned_to',
        'is_locked',        
    ];
}

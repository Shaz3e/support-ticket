<?php

namespace Shaz3e\SupportTicket\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTicketPriority extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_active'
    ];
}

<?php

use Illuminate\Support\Facades\Route;
use Shaz3e\SupportTicket\Http\Controllers\Admin\SupportTicketController;
use Shaz3e\SupportTicket\Http\Controllers\Admin\SupportTicketPriorityController;
use Shaz3e\SupportTicket\Http\Controllers\Admin\SupportTicketStatusController;
use Shaz3e\SupportTicket\Http\Controllers\User\SupportTicketController as UserSupportTicketController;

Route::middleware(config('support-ticket.middleware'))
    ->prefix(config('support-ticket.admin_url'))
    ->name('admin.')
    ->group(function(){
        Route::resource('/support-tickets', SupportTicketController::class);
        Route::resource('/ticket-priority', SupportTicketPriorityController::class);
        Route::resource('/ticket-status', SupportTicketStatusController::class);
    });

Route::middleware(config('support-ticket.middleware'))
    ->prefix(config('support-ticket.user_url'))
    ->name('user.')
    ->group(function(){
        Route::resource('/my-tickets', UserSupportTicketController::class);
    });
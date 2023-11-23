<?php

namespace Shaz3e\SupportTicket\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Shaz3e\SupportTicket\Models\SupportTicket;

class SupportTicketController extends Controller
{
    // View
    protected $view;

    // Route
    protected $route;

    public function __construct()
    {
        $this->view = 'support-ticket::support-ticket.admin.support-tickets.'; // Development
        // $this->view = 'vendor.shaz3e.support-ticket.admin.support-tickets.'; // Production
        $this->route = config('support-ticket.admin_url') . '/support-tickets/';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view($this->view . 'index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

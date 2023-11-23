<?php

namespace Shaz3e\SupportTicket\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Shaz3e\SupportTicket\Helpers\SupportTicketStatus;
use Shaz3e\SupportTicket\Http\Request\TicketStatusRequest;

class SupportTicketStatusController extends Controller
{
    // View
    protected $view;

    // Route
    protected $route;

    public function __construct()
    {
        $this->view = 'support-ticket::support-ticket.admin.support-ticket-status.'; // Development
        // $this->view = 'vendor.shaz3e.support-ticket.admin.support-ticket-status.'; // Production

        $this->route = config('support-ticket.admin_url') . '/ticket-status/';
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->id != null) {
            $data = [
                'status' => $request->status
            ];
            SupportTicketStatus::update($request->id, $data);
            return back();
        }
        $dataSet = SupportTicketStatus::all();
        return view(
            $this->view . 'index',
            compact('dataSet')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->view . 'create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TicketStatusRequest $request)
    {
        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'status' => $request->status,
        ];

        $result = SupportTicketStatus::create($data);

        if($result){
            return redirect($this->route);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = SupportTicketStatus::find($id);
        if (!$data) {
            return redirect($this->route);
        }
        return redirect($this->route. $id . '/edit' );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = SupportTicketStatus::find($id);
        if (!$data) {
            return redirect($this->route);
        }
        return view(
            $this->view . 'edit',
            compact(
                'data'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TicketStatusRequest $request, string $id)
    {
        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'status' => $request->status,
        ];

        $result = SupportTicketStatus::update($id, $data);

        if($result){
            return redirect($this->route);
        }        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete Status
        $result = SupportTicketStatus::find($id);
        $delete = $result->delete();
        if ($delete) {
            return redirect($this->route);
        }
        return back();
    }
}

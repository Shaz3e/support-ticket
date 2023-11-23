<?php

namespace Shaz3e\SupportTicket\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Shaz3e\SupportTicket\Helpers\SupportTicketPriority;
use Shaz3e\SupportTicket\Http\Request\TicketPriorityRequest;

class SupportTicketPriorityController extends Controller
{
    // View
    protected $view;

    // Route
    protected $route;

    public function __construct()
    {        
        $this->view = 'support-ticket::support-ticket.admin.support-ticket-priority.'; // Development
        // $this->view = 'vendor.shaz3e.support-ticket.admin.support-ticket-priority.'; // Production
        $this->route = config('support-ticket.admin_url') . '/ticket-priority/';
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
            SupportTicketPriority::update($request->id, $data);
            return back();
        }
        $dataSet = SupportTicketPriority::all();
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
    public function store(TicketPriorityRequest $request)
    {
        $data = [
            'name' => $request->name,
            'status' => $request->status,
        ];

        $result = SupportTicketPriority::create($data);

        if($result){
            return redirect($this->route);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = SupportTicketPriority::find($id);
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
        $data = SupportTicketPriority::find($id);
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
    public function update(TicketPriorityRequest $request, string $id)
    {
        $data = [
            'name' => $request->name,
            'status' => $request->status,
        ];

        $result = SupportTicketPriority::update($id, $data);

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
        $result = SupportTicketPriority::find($id);
        $delete = $result->delete();
        if ($delete) {
            return redirect($this->route);
        }
        return back();
    }
}

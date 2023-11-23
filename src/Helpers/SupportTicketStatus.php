<?php

namespace Shaz3e\SupportTicket\Helpers;

use Shaz3e\SupportTicket\Models\SupportTicketStatus as ModelsSupportTicketStatus;

class SupportTicketStatus
{
    /**
     * Get all Status
     */
    public static function all()
    {
        return ModelsSupportTicketStatus::all();
    }

    /**
     * Create new support ticket status
     */
    public static function create($data)
    {
        return ModelsSupportTicketStatus::create($data);
    }

    /**
     * Find support ticket status by id
     */
    public static function find($id)
    {
        return ModelsSupportTicketStatus::find($id);
    }

    /**
     * Update support ticket by id
     */
    public static function update($id, $data)
    {
        return ModelsSupportTicketStatus::where('id', $id)->update($data);
    }

    /**
     * Delete support ticket status by id
     */
    public static function delete($id)
    {
        return ModelsSupportTicketStatus::where('id', $id)->delete();
    }
}
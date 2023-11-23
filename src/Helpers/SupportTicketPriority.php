<?php

namespace Shaz3e\SupportTicket\Helpers;

use Shaz3e\SupportTicket\Models\SupportTicketPriority as ModelsSupportTicketPriority;

class SupportTicketPriority
{
    /**
     * Get all support ticket priority
     */
    public static function all()
    {
        return ModelsSupportTicketPriority::all();
    }

    /**
     * Create new support ticket priority
     */
    public static function create($data)
    {
        return ModelsSupportTicketPriority::create($data);
    }

    /**
     * Find support ticket priority by id
     */
    public static function find($id)
    {
        return ModelsSupportTicketPriority::find($id);
    }

    /**
     * Update support ticket by id
     */
    public static function update($id, $data)
    {
        return ModelsSupportTicketPriority::where('id', $id)->update($data);
    }

    /**
     * Delete support ticket priority by id
     */
    public static function delete($id)
    {
        return ModelsSupportTicketPriority::where('id', $id)->delete();
    }
}
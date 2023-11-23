<?php

namespace Shaz3e\SupportTicket\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class TicketPriorityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // $configuredMiddleware = config('support-ticket.middleware');

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->route('id'); // Replace 'your_model_id' with the actual key used in your route
        return [
            'name' => 'required|max:100|unique:support_ticket_priorities,name,' . $id . ',id',
            'status' => 'required|boolean',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'The Status name is required.',
            'name.max' => 'The Status name may not be greater than 100 characters.',
            'status.required' => 'The Status is required.',
            'status.boolean' => 'The Status must be enable or disable.',
        ];
    }
}

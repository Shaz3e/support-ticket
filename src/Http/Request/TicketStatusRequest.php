<?php

namespace Shaz3e\SupportTicket\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class TicketStatusRequest extends FormRequest
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
            'name' => 'required|max:100|unique:support_ticket_statuses,name,' . $id . ',id',
            'slug' => 'required|max:100|regex:/^[a-zA-Z0-9-]+$/|unique:support_ticket_statuses,slug,' . $id . ',id',
            'description' => 'nullable|max:255',
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
            'name.unique' => 'The Status name has alread been used.',
            'slug.required' => 'The Status slug is required.',
            'slug.max' => 'The Status slug may not be greater than 100 characters.',
            'slug.regex' => 'The Status slug may only contain letters, numbers, and dashes.',
            'slug.unique' => 'The Status slug has alread been used.',
            'description.max' => 'The Status description may not be greater than 255 characters.',
            'status.required' => 'The Status is required.',
            'status.boolean' => 'The Status must be enable or disable.',
        ];
    }
}

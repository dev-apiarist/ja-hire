<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Http\FormRequest;

class ListingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        $currentRoute = $this->route()->getName();
        return match ($currentRoute) {
            'update' => [
                'title' => ['required'],
                'company' => ['required', Rule::unique('listings', 'company')->ignore($this->listing)],
                'location' => 'required',
                'description' => 'required',
                'website' => 'required',
                'email' => 'required | email',
                'tags' => 'required',
            ],
            'store' => [
                'title' => 'required',
                'company' => ['required', Rule::unique('listings', 'company')],
                'location' => 'required',
                'description' => 'required',
                'website' => 'required',
                'email' => 'required | email',
                'tags' => 'required',
            ],
            default => []
        };
    }
}

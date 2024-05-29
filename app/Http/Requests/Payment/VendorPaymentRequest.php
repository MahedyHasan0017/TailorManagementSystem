<?php

namespace App\Http\Requests\Payment;

use Illuminate\Foundation\Http\FormRequest;

class VendorPaymentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'our_number' => 'required' , 
            'tailor_number' => 'required',
            'time_span' => 'required',
            'mobile_number' => 'required',
            'transection_id' => 'required',
            'total_amount' => 'required',
        ];
    }
}

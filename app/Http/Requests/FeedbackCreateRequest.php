<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required|integer',
            'customer_id' => 'required|integer',
            'feedback_text' => 'required|string|max:2000',
            'tc_yes' => 'required|integer|in:0,1',
            'timestamp' => 'required|integer',
        ];
    }


}

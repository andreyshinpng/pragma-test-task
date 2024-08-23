<?php

namespace App\Services;

use App\Models\Feedback;

class FeedbackService
{
    public function create(array $data): Feedback
    {
        return Feedback::create([
            'user_id' => $data['user_id'],
            'customer_id' => $data['customer_id'],
            'feedback_text' => $data['feedback_text'],
            'tc_yes' => $data['tc_yes'],
            'timestamp' => $data['timestamp'],
        ]);
    }


    public function exists(array $data): bool
    {
        return Feedback::where('user_id', $data['user_id'])->where('customer_id', $data['customer_id'])->exists();
    }


}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackExistsRequest;
use App\Http\Requests\FeedbackCreateRequest;
use App\Services\FeedbackService;

class FeedbackController extends Controller
{
    protected $feedbackService;


    public function __construct()
    {
        $this->feedbackService = new FeedbackService();
    }


    public function create(FeedbackCreateRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();
        $created = $this->feedbackService->create($data);

        if ($created) {
            return $this->ok('Feedback created successfully.');
        } else {
            return $this->badRequest('Feedback created failed.');
        }
    }


    public function exists(FeedbackExistsRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();
        $exists = $this->feedbackService->exists($data);

        if ($exists) {
            return $this->ok('Feedback exists.', [
                'user_id' => $data['user_id'],
                'exists' => true
            ]);
        } else {
            return $this->badRequest('Feedback does not exists.', [
                'user_id' => $data['user_id'],
                'exists' => false
            ]);
        }
    }


}

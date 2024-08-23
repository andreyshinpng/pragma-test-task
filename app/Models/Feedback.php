<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';

    protected $fillable = [
        'user_id',
        'customer_id',
        'feedback_text',
        'tc_yes',
        'timestamp'
    ];

    protected $casts = [
        'timestamp' => 'datetime',
    ];

}

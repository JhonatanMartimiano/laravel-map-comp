<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    public $table = "responses";

    /**
     * @var array
     */
    protected $fillable = [
        "response",
        "user_id",
        "question_id"
    ];
}

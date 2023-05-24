<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralResponse extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    public $table = "general_responses";

    /**
     * @var array
     */
    protected $fillable = [
        "response",
        "user_id",
        "input_name"
    ];
}

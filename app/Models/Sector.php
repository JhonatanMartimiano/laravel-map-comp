<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    public $table = "sectors";

    /**
     * @var array
     */
    protected $fillable = [
        "title",
        "user_id"
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    public $table = "questions";

    /**
     * @var array
     */
    protected $fillable = [
        "title",
        "competence_id"
    ];

    /**
     * @return Competence|null
     */
    public function competence(): ?Competence
    {
        return Competence::find($this->competence_id);
    }
}

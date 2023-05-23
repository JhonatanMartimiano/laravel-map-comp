<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    public $table = "competences";

    /**
     * @var array
     */
    protected $fillable = [
        "title",
        "sector_id"
    ];

    /**
     * @return Sector
     */
    public function sector(): Sector
    {
        return Sector::find($this->sector_id);
    }

    public function questions()
    {
        return Question::where('competence_id', $this->id)->get();
    }
}

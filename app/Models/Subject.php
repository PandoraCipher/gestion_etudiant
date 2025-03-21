<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'coef', 'program_id'];

    // Relation : Une matière appartient à un programme
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}

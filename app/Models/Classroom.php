<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
  use HasFactory;

  protected $fillable = ["name", "program_id"]; // Champs assignables en masse

  // Relation : Une salle de classe appartient à un programme
  public function program()
  {
    return $this->belongsTo(Program::class);
  }

  // Relation : Une salle de classe a plusieurs étudiants
  public function students()
  {
    return $this->hasMany(Student::class);
  }
}

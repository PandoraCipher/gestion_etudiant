<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  use HasFactory;
  protected $fillable = [
    "name",
    "lastName",
    "academic_year",
    "program_id",
    "classroom_id",
    "email",
    "phone",
  ];
  // Relation : Un étudiant appartient à un programme
  public function program()
  {
    return $this->belongsTo(Program::class);
  }

  // Relation : Un étudiant appartient à une salle de classe
  public function classroom()
  {
    return $this->belongsTo(Classroom::class);
  }
}

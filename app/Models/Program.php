<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['name'];  // Champs assignables en masse

    // Relation : Un programme a plusieurs salles de classe
    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

    // Relation : Un programme a plusieurs étudiants
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    // Relation : Un programme a plusieurs matières
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}

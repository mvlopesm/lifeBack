<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAnimals extends Model
{
    use HasFactory;

    protected $table = 'animals';

    protected $fillable = ['name', 'species', 'breed', 'age', 'tutor'];

    public function exams()
    {
        return $this->hasMany(ModelExams::class, 'animal_id');
    }

    public function results()
    {
        return $this->hasMany(ModelResults::class, 'animal_id');
    }
}

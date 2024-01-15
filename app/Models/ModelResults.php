<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelResults extends Model
{
    use HasFactory;

    protected $table = 'results';

    protected $fillable = ['result', 'exam_id'];

    public function animal()
    {
        return $this->belongsTo(ModelAnimals::class, 'animal_id');
    }
}

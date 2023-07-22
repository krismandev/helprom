<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function questionGroup()
    {
        return $this->belongsTo(QuestionGroup::class);
    }

    public function listAnswer()
    {
        return $this->belongsTo(ListAnswer::class);
    }

    public function screenings()
    {
        return $this->hasMany(Screening::class);
    }
}

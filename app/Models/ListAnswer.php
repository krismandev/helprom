<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListAnswer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected function answers(): Attribute
    {

        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}

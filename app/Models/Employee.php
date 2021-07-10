<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'surname', 'patronymic', 'phone', 'personnel_number'
    ];

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }
}

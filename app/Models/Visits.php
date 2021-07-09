<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Visits extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

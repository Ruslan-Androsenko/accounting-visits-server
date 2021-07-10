<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Visit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['type', 'employee_id'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'department_id',
        'email',
        'phone_number',
        'hire_date',
        'image',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}

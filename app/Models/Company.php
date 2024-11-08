<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    //Allow mass assignment
    protected $guarded = [];

    //Create relationship with employee - Company has many employees
    public function employees() //: HasMany
    {
        return $this->hasMany(Employee::class);
    }
}

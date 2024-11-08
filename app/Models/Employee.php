<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;

    // Allow mass assignment
    protected $guarded = [];

    //Create relationship - Employee belongs to a company
    public function company()  //: BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}

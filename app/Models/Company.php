<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Company extends Model
{
    use HasFactory;

    // linking table, since I changed the name
    protected $table = 'company_listings';

    // declare fillable variables to allow mass assignment
    protected $fillable = ['name', 'email', 'logo', 'website'];

}

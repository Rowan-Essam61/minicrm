<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table="customers";
    protected $primaryKey = "id";
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $fillable = [
        'username',
        'email',
    ];
}

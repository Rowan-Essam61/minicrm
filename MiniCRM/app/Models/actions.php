<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actions extends Model
{
    use HasFactory;
    protected $table="actions";
    protected $primaryKey = "id";
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $fillable = [
        'employee_id',
        'customer_id',
        'action_type',
        'description'
    ];
}

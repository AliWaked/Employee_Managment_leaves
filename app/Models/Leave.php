<?php

namespace App\Models;

use App\Enum\LeaveStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'status',
    ];
    protected $casts = [
        'status' => LeaveStatus::class
    ];
}

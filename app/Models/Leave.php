<?php

namespace App\Models;

use App\Enum\LeaveStatus;
use Illuminate\Database\Eloquent\Builder;
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
    // public function scopeEmployee(Builder $builder) {
    //     $builder->where('')
    // }
    public function scopeActive(Builder $builder): void
    {
        $builder->where('status', LeaveStatus::ACTIVE);
    }
}

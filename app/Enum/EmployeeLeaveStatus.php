<?php

namespace App\Enum;

enum EmployeeLeaveStatus: string
{
        //'pending', 'approved', 'denied'
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case DENIED = 'denied';
}

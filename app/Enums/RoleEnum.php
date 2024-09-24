<?php

namespace App\Enums;

use App\Traits\EnumSupport;

enum RoleEnum: string
{
    use EnumSupport;

    case SUPER_ADMIN = 'super_admin';
    case VISITOR = 'visitor';
}

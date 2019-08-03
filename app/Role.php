<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as RoleOrg;
use App\Traits\Method\RoleMethod;
use App\Traits\Attribute\RoleAttribute;

class Role extends RoleOrg
{
    use RoleMethod,RoleAttribute;
    //
}

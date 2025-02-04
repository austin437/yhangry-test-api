<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SetMenu extends Model
{
    protected $hidden = ['id', 'updated_at'];

    protected function getGroupsAttribute($value) {
        return json_decode($value);
    }
}

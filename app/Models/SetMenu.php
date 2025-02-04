<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cuisine;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SetMenu extends Model
{
    protected $hidden = ['id', 'updated_at'];

    protected function getGroupsAttribute($value) {
        return json_decode($value);
    }

    public function cuisines(): HasMany
    {
        return $this->hasMany(Cuisine::class);
    }
}

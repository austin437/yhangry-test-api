<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\SetMenu;

class Cuisine extends Model
{
    protected $hidden = ['set_menu_id', 'created_at', 'updated_at'];

    public function setMenu(): BelongsTo
    {
        return $this->belongsTo(SetMenu::class);
    }
}

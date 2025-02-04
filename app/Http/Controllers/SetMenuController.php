<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SetMenu;

class SetMenuController extends Controller
{
    public function index()
    {
        $setMenus = SetMenu::get();
 
        return response()->json($setMenus); 
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SetMenu;

class SetMenuController extends Controller
{
    public function index()
    {
        $setMenus = SetMenu::with(['cuisines'])->get();
 
        return response()->json(['data' => $setMenus]); 
    }
}

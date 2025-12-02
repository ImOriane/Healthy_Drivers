<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        // Récupère tous les menus depuis la base
        $menus = Menu::all();

        // Passe les menus à la vue
        return view('nosMenus', compact('menus'));
    }
}

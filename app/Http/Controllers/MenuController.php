<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('nosMenus', compact('menus'));
    }

    public function show($slug)
    {
        $menu = Menu::where('slug', $slug)->firstOrFail();

        // Décoder les JSON pour la vue si ce sont des strings
        if (is_string($menu->ingredients)) {
            $menu->ingredients = json_decode($menu->ingredients, true);
        }

        if (is_string($menu->preparation)) {
            $menu->preparation = json_decode($menu->preparation, true);
        }

        // S'assurer que ce sont des tableaux
        $menu->ingredients = $menu->ingredients ?? [];
        $menu->preparation = $menu->preparation ?? [];

        return view('recette', compact('menu'));
    }
}

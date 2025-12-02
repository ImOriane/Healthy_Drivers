<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $menus = [
            [
                'image' => '/images/menus/gratin-dauphinois.jpg',
                'titre' => 'GRATIN DAUPHINOIS',
                'description' => 'Végétarien · Plat chaud · Crémeux',
                'nutriscore' => 'D'
            ],
            [
                'image' => '/images/menus/poulet-curry.jpg',
                'titre' => 'POULET CURRY COCO À LA COURGE BUTTERNUT',
                'description' => 'Plat chaud · Épicé',
                'nutriscore' => 'B'
            ],
            [
                'image' => '/images/menus/nouilles-legumes.jpg',
                'titre' => 'NOUILLES SAUTÉ AUX LÉGUMES',
                'description' => 'Végétarien · Plat chaud · Peu calorique',
                'nutriscore' => 'C'
            ],
            [
                'image' => '/images/menus/ratatouille.jpg',
                'titre' => 'RATATOUILLE',
                'description' => 'Végétarien · Plat chaud',
                'nutriscore' => 'B'
            ],
            [
                'image' => '/images/menus/lasagne-vegetarien.jpg',
                'titre' => 'LASAGNE VÉGÉTARIEN',
                'description' => 'Végétarien · Plat chaud',
                'nutriscore' => 'C'
            ],
            [
                'image' => '/images/menus/pate-poivron.jpg',
                'titre' => 'PÂTE À LA CRÈME DE POIVRON',
                'description' => 'Végétarien · Plat chaud',
                'nutriscore' => 'B'
            ],
            [
                'image' => '/images/menus/quiche-legumes.jpg',
                'titre' => 'QUICHE AUX LÉGUMES',
                'description' => 'Végétarien · Plat chaud',
                'nutriscore' => 'C'
            ],
            [
                'image' => '/images/menus/risotto-burrata.jpg',
                'titre' => 'RISOTTO TOMATE BURRATA',
                'description' => 'Végétarien · Plat chaud',
                'nutriscore' => 'C'
            ],
        ];

        foreach ($menus as $menu) {
            Menu::updateOrCreate(
                ['titre' => $menu['titre'], 'description' => $menu['description']],
                $menu
            );
        }
    }
}

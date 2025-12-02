<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use Illuminate\Support\Str;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $menus = [
            [
                'image' => '/images/menus/ratatouille.jpg',
                'titre' => 'RATATOUILLE',
                'slug' => 'ratatouille',
                'description' => 'Végétarien · Plat chaud',
                'nutriscore' => 'B',
                'temps_preparation' => 45,
                'calories' => 180,
                'ingredients' => json_encode([
                    '2 aubergines',
                    '3 courgettes',
                    '4 tomates',
                    '1 poivron rouge',
                    '1 poivron jaune',
                    '1 oignon',
                    '3 gousses d\'ail',
                    'Huile d\'olive',
                    'Herbes de Provence',
                    'Sel et poivre'
                ]),
                'preparation' => json_encode([
                    'Laver et couper tous les légumes en rondelles fines',
                    'Préchauffer le four à 180°C',
                    'Dans un plat, disposer les légumes en alternance',
                    'Arroser d\'huile d\'olive et saupoudrer d\'herbes de Provence',
                    'Enfourner pendant 45 minutes',
                    'Servir chaud avec du riz ou du pain'
                ])
            ],
            [
                'image' => '/images/menus/gratin-dauphinois.jpg',
                'titre' => 'GRATIN DAUPHINOIS',
                'slug' => 'gratin-dauphinois',
                'description' => 'Végétarien · Plat chaud · Crémeux',
                'nutriscore' => 'D',
                'temps_preparation' => 60,
                'calories' => 350,
                'ingredients' => json_encode([
                    '1 kg de pommes de terre',
                    '50 cl de crème liquide',
                    '25 cl de lait',
                    '2 gousses d\'ail',
                    'Noix de muscade',
                    'Beurre',
                    'Sel et poivre'
                ]),
                'preparation' => json_encode([
                    'Éplucher et couper les pommes de terre en fines rondelles',
                    'Frotter le plat avec l\'ail et le beurrer',
                    'Disposer les pommes de terre en couches',
                    'Mélanger la crème et le lait, assaisonner',
                    'Verser sur les pommes de terre',
                    'Enfourner à 180°C pendant 1h'
                ])
            ],
            [
                'image' => '/images/menus/poulet-curry.jpg',
                'titre' => 'POULET CURRY COCO À LA COURGE BUTTERNUT',
                'slug' => 'poulet-curry-coco-courge-butternut',
                'description' => 'Plat chaud · Épicé',
                'nutriscore' => 'B',
                'temps_preparation' => 40,
                'calories' => 420,
                'ingredients' => json_encode([
                    '500g de blancs de poulet',
                    '1 courge butternut',
                    '40cl de lait de coco',
                    '2 c.à.s de curry',
                    '1 oignon',
                    '2 gousses d\'ail',
                    'Gingembre frais',
                    'Huile d\'olive',
                    'Sel et poivre'
                ]),
                'preparation' => json_encode([
                    'Couper le poulet en dés et la courge en cubes',
                    'Faire revenir l\'oignon et l\'ail',
                    'Ajouter le poulet et faire dorer',
                    'Ajouter le curry et la courge',
                    'Verser le lait de coco et laisser mijoter 25 min',
                    'Servir avec du riz basmati'
                ])
            ],
            [
                'image' => '/images/menus/nouilles-legumes.jpg',
                'titre' => 'NOUILLES SAUTÉ AUX LÉGUMES',
                'slug' => 'nouilles-saute-legumes',
                'description' => 'Végétarien · Plat chaud · Peu calorique',
                'nutriscore' => 'C',
                'temps_preparation' => 25,
                'calories' => 280,
                'ingredients' => json_encode([
                    '300g de nouilles chinoises',
                    '1 poivron',
                    '2 carottes',
                    '200g de champignons',
                    '1 oignon',
                    'Sauce soja',
                    'Huile de sésame',
                    'Gingembre',
                    'Ail'
                ]),
                'preparation' => json_encode([
                    'Cuire les nouilles selon les instructions',
                    'Couper tous les légumes en julienne',
                    'Faire sauter les légumes au wok',
                    'Ajouter les nouilles égouttées',
                    'Assaisonner avec la sauce soja',
                    'Servir immédiatement'
                ])
            ],
            [
                'image' => '/images/menus/lasagne-vegetarien.jpg',
                'titre' => 'LASAGNE VÉGÉTARIEN',
                'slug' => 'lasagne-vegetarien',
                'description' => 'Végétarien · Plat chaud',
                'nutriscore' => 'C',
                'temps_preparation' => 55,
                'calories' => 380,
                'ingredients' => json_encode([
                    'Feuilles de lasagne',
                    '500g d\'épinards',
                    '400g de ricotta',
                    'Sauce tomate',
                    'Mozzarella',
                    'Parmesan',
                    'Ail',
                    'Basilic'
                ]),
                'preparation' => json_encode([
                    'Faire revenir les épinards avec l\'ail',
                    'Mélanger la ricotta avec les épinards',
                    'Dans un plat, alterner lasagne, ricotta et sauce',
                    'Terminer par la mozzarella râpée',
                    'Enfourner à 180°C pendant 35 minutes',
                    'Laisser reposer 5 min avant de servir'
                ])
            ],
            [
                'image' => '/images/menus/pate-poivron.jpg',
                'titre' => 'PÂTE À LA CRÈME DE POIVRON',
                'slug' => 'pate-creme-poivron',
                'description' => 'Végétarien · Plat chaud',
                'nutriscore' => 'B',
                'temps_preparation' => 30,
                'calories' => 320,
                'ingredients' => json_encode([
                    '400g de pâtes',
                    '3 poivrons rouges',
                    '20cl de crème',
                    'Parmesan',
                    'Ail',
                    'Basilic',
                    'Huile d\'olive'
                ]),
                'preparation' => json_encode([
                    'Faire griller les poivrons au four',
                    'Retirer la peau et mixer avec la crème',
                    'Cuire les pâtes al dente',
                    'Mélanger les pâtes avec la crème de poivron',
                    'Ajouter le parmesan râpé',
                    'Décorer avec du basilic frais'
                ])
            ],
            [
                'image' => '/images/menus/quiche-legumes.jpg',
                'titre' => 'QUICHE AUX LÉGUMES',
                'slug' => 'quiche-legumes',
                'description' => 'Végétarien · Plat chaud',
                'nutriscore' => 'C',
                'temps_preparation' => 50,
                'calories' => 340,
                'ingredients' => json_encode([
                    'Pâte brisée',
                    '3 œufs',
                    '20cl de crème',
                    'Courgette',
                    'Tomates',
                    'Poivron',
                    'Fromage râpé',
                    'Herbes de Provence'
                ]),
                'preparation' => json_encode([
                    'Étaler la pâte dans un moule',
                    'Faire revenir les légumes coupés',
                    'Battre les œufs avec la crème',
                    'Disposer les légumes sur la pâte',
                    'Verser l\'appareil et ajouter le fromage',
                    'Cuire 35 min à 180°C'
                ])
            ],
            [
                'image' => '/images/menus/risotto-burrata.jpg',
                'titre' => 'RISOTTO TOMATE BURRATA',
                'slug' => 'risotto-tomate-burrata',
                'description' => 'Végétarien · Plat chaud',
                'nutriscore' => 'C',
                'temps_preparation' => 35,
                'calories' => 390,
                'ingredients' => json_encode([
                    '300g de riz arborio',
                    '1L de bouillon',
                    '400g de tomates cerises',
                    '2 burrata',
                    'Parmesan',
                    'Vin blanc',
                    'Basilic',
                    'Huile d\'olive'
                ]),
                'preparation' => json_encode([
                    'Faire revenir le riz dans l\'huile',
                    'Déglacer avec le vin blanc',
                    'Ajouter le bouillon louche par louche',
                    'Incorporer les tomates cerises rôties',
                    'Ajouter le parmesan hors du feu',
                    'Déposer la burrata et le basilic au moment de servir'
                ])
            ],
        ];

        foreach ($menus as $menu) {
            Menu::updateOrCreate(
                ['slug' => $menu['slug']],
                $menu
            );
        }
    }
}

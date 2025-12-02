<?php

namespace App\Console\Commands;

use App\Models\Menu;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class GenerateMenuSlugs extends Command
{
    protected $signature = 'menus:generate-slugs';
    protected $description = 'Generate slugs for existing menus';

    public function handle()
    {
        $menus = Menu::whereNull('slug')->orWhere('slug', '')->get();

        if ($menus->isEmpty()) {
            $this->info('All menus already have slugs!');
            return;
        }

        foreach ($menus as $menu) {
            $slug = Str::slug($menu->titre);

            // Vérifier si le slug existe déjà
            $count = 1;
            $originalSlug = $slug;
            while (Menu::where('slug', $slug)->where('id', '!=', $menu->id)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $menu->slug = $slug;
            $menu->save();

            $this->info("Slug generated for: {$menu->titre} -> {$slug}");
        }

        $this->info('All slugs generated successfully!');
    }
}

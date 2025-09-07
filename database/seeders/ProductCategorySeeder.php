<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Grande Équipements' => [
                'Unité dentaire',
                'Stérilisation',
                'Compresseur / Aspiration',
                'X-Ray',
                'Détartrage / Endo',
                'Scanner 3D',
            ],
            'Consommables' => [
                'Rotatifs',
                'Usage unique',
                'Restauration',
                'Fraises & Polissage',
                'Hygiène & Désinfection',
            ],
            'Accessoires' => [
                'Bacs & Supports',
                'Alimentation',
                'Pièces diverses',
            ],
            'Prothèse Dentaire' => [
                'Machines',
                'Pièces de rechange',
                'Consommables',
            ],
            'Décoration' => [
                'Tableaux dentaires',
                'Objets décoratifs',
                'Stickers',
            ],
        ];

        foreach ($categories as $parent => $children) {
            $parentCategory = ProductCategory::create([
                'name' => $parent,
                'slug' => Str::slug($parent),
                'is_active' => true,
            ]);

            foreach ($children as $child) {
                ProductCategory::create([
                    'name' => $child,
                    'slug' => Str::slug($child),
                    'parent_id' => $parentCategory->id,
                    'is_active' => true,
                ]);
            }
        }
    }
}

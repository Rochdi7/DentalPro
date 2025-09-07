<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductTag;
use Illuminate\Support\Str;

class ProductTagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = [
            'Promotion',
            'Nouveauté',
            'Best-seller',
            'Populaire',
            'Offre spéciale',
            'Prix réduit',
            'Équipement premium',
            'Écologique',
            'Facile à utiliser',
            'Durable',
            'Garantie incluse',
            'Stock limité',
            'Recommandé',
            'Exclusif',
            'Haute performance',
            'Rapport qualité-prix',
            'Sécurité',
            'Confort',
            'Hygiène',
            'Professionnel',
            'Compact',
            'Transportable',
            'Innovation',
            'Édition spéciale',
        ];

        foreach ($tags as $tag) {
            ProductTag::create([
                'name' => $tag,
                'slug' => Str::slug($tag),
            ]);
        }
    }
}

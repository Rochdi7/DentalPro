<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        // 1) Si 'attribute_name' existe, le rendre nullable temporairement pour éviter les erreurs
        if (Schema::hasColumn('product_characteristics', 'attribute_name')) {
            Schema::table('product_characteristics', function (Blueprint $table) {
                $table->string('attribute_name')->nullable()->change();
            });
        }

        // 2) Copier les données depuis 'name' si besoin
        if (Schema::hasColumn('product_characteristics', 'name')) {
            DB::statement("
                UPDATE product_characteristics
                SET attribute_name = COALESCE(attribute_name, name)
                WHERE attribute_name IS NULL
            ");
        }

        // 3) Supprimer définitivement 'name'
        Schema::table('product_characteristics', function (Blueprint $table) {
            if (Schema::hasColumn('product_characteristics', 'name')) {
                $table->dropColumn('name');
            }
        });

        // 4) Reposer la contrainte NOT NULL sur 'attribute_name'
        Schema::table('product_characteristics', function (Blueprint $table) {
            $table->string('attribute_name')->nullable(false)->change();
        });
    }

    public function down(): void
    {
        Schema::table('product_characteristics', function (Blueprint $table) {
            $table->string('name')->nullable();
        });

        DB::statement("
            UPDATE product_characteristics
            SET name = COALESCE(name, attribute_name)
            WHERE name IS NULL
        ");
    }
};


<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductTag;
use App\Models\ProductVariant;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Global KPIs
        $stats = [
            'totalProducts'       => Product::count(),
            'totalCategories'     => ProductCategory::count(),
            'totalTags'           => ProductTag::count(),
            'totalHot'            => Product::where('is_hot', true)->count(),
            'totalOccasion'       => Product::where('is_occasion', true)->count(),
            'totalVariants'       => ProductVariant::count(),
            'totalPosts'          => BlogPost::count(),
            'totalBlogCategories' => BlogCategory::count(),
            'totalBlogTags'       => BlogTag::count(),
        ];

        // Recent Activity
        $recentProducts = Product::latest()->take(5)->get();
        $recentPosts    = BlogPost::where('is_published', true)->latest()->take(5)->get();

        // Charts: Produits créés par mois
        $productsByMonth = Product::select(
                DB::raw("DATE_FORMAT(created_at, '%Y-%m') as month"),
                DB::raw("COUNT(*) as total")
            )
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month');

        // Charts: Articles publiés par mois
        $postsByMonth = BlogPost::where('is_published', true)
            ->select(
                DB::raw("DATE_FORMAT(published_at, '%Y-%m') as month"),
                DB::raw("COUNT(*) as total")
            )
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month');

        // Répartition des produits par catégorie
        $productsByCategory = ProductCategory::withCount('products')->get();

        // Comparaison Hot / Occasion / Normal
        $productComparison = [
            'hot'      => Product::where('is_hot', true)->count(),
            'occasion' => Product::where('is_occasion', true)->count(),
            'normal'   => Product::where('is_hot', false)->where('is_occasion', false)->count(),
        ];

        // ✅ Return the correct view path
        return view('dashboard.dashboard', compact(
            'stats',
            'recentProducts',
            'recentPosts',
            'productsByMonth',
            'postsByMonth',
            'productsByCategory',
            'productComparison'
        ));
    }
}

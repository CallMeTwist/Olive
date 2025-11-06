<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with(['primaryImage', 'category', 'images'])
            ->where('is_active', true);

        // Category filter
        // ✅ Category filter (by slug instead of ID)
        if ($request->filled('category') && $request->category !== 'all') {
            $category = Category::where('slug', $request->category)->first();
            if ($category) {
                $query->where('category_id', $category->id);
            }
        }


        // Search filter
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%')
                    ->orWhere('sku', 'like', '%' . $request->search . '%');
            });
        }

        // Availability filter
        if ($request->filled('availability')) {
            if ($request->availability === 'in-stock') {
                $query->where('stock', '>', 0);
            } elseif ($request->availability === 'out-of-stock') {
                $query->where('stock', '=', 0);
            }
        }

        // Price range filter
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        // Sorting
        switch ($request->get('sort', 'latest')) {
            case 'price_low':
            case 'price-ascending':
                $query->orderBy('price', 'asc');
                break;
            case 'price_high':
            case 'price-descending':
                $query->orderBy('price', 'desc');
                break;
            case 'title-ascending':
                $query->orderBy('title', 'asc');
                break;
            case 'title-descending':
                $query->orderBy('title', 'desc');
                break;
            case 'created-ascending':
                $query->orderBy('created_at', 'asc');
                break;
            case 'rating':
                $query->orderBy('average_rating', 'desc');
                break;
            case 'best-selling':
                // Add logic for best selling if you track sales
                $query->latest();
                break;
            case 'manual':
            case 'featured':
                // Add your featured logic here
                $query->latest();
                break;
            default:
                $query->latest();
        }

        // Pagination
        $perPage = $request->get('per_page', 12);
        $products = $query->paginate($perPage);

        // Get all active categories with product count
        $categories = Category::withCount(['products' => function ($query) {
            $query->where('is_active', true);
        }])
            ->has('products')
            ->get();

        // Get total product count
        $totalProducts = Product::where('is_active', true)->count();

        // AJAX request - return JSON
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'html' => view('store.partials.product-grid', compact('products'))->render(),
                'pagination' => view('store.partials.pagination', compact('products'))->render(),
                'total' => $products->total(),
                'current_page' => $products->currentPage(),
                'last_page' => $products->lastPage(),
                'from' => $products->firstItem() ?? 0,
                'to' => $products->lastItem() ?? 0,
            ]);
        }

        // Normal request - return view
        return view('store.index', compact('products', 'categories', 'totalProducts'));
    }

    public function show(Product $product)
    {
        $product->load(['images' => fn($q) => $q->orderBy('position'), 'category']);

        $relatedProducts = Product::with(['primaryImage', 'category'])
            ->where('is_active', true)
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('stock', '>', 0)
            ->take(4)
            ->get();

        return view('store.show', compact('product', 'relatedProducts'));
    }

    public function showCategory($slug)
    {
        $category = Category::where('slug', $slug)
            ->with('products')
            ->firstOrFail();

        return view('shop.category', compact('category'));
    }

}

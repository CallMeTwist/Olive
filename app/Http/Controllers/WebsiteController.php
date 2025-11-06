<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class WebsiteController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        // Cache homepage data for 30 minutes (1800 seconds)
        $data = Cache::remember('homepage_data', 1800, function () {

            // ✅ Fetch top categories with active products
            $categories = Category::query()
                ->whereHas('products', fn($q) => $q->where('is_active', true))
                ->withCount(['products' => fn($q) => $q->where('is_active', true)])
                ->with(['products' => function ($q) {
                    $q->where('is_active', true)
                        ->with('primaryImage')
                        ->latest()
                        ->take(2); // 2 sample products for banner display
                }])
                ->take(3)
                ->get();

            // ✅ Fetch random or latest trending products
            $products = Product::query()
                ->where('is_active', true)
                ->with(['images', 'primaryImage'])
                ->inRandomOrder()
                ->take(6)
                ->get();

            return compact('categories', 'products');
        });

        return view('website.welcome', $data);
    }

    public function about()
    {
        return view('website.about');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        $whatsappNumber = config('app.whatsapp_number');
        $message = "New Contact Form Submission:\n\n";
        $message .= "Name: {$validated['name']}\n";
        $message .= "Email: {$validated['email']}\n";
        if ($validated['phone']) {
            $message .= "Phone: {$validated['phone']}\n";
        }
        $message .= "\nMessage:\n{$validated['message']}";

        return redirect()->away("https://wa.me/{$whatsappNumber}?text=" . urlencode($message));
    }

    public function faq()
    {
        return view('website.faq');
    }
}

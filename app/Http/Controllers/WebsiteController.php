<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        $categories = Category::withCount(['products' => function ($query) {
            $query->where('is_active', true);
        }])
            ->with(['products' => function ($query) {
                $query->where('is_active', true)
                    ->with('primaryImage')
                    ->take(2); // two sample products for banner display
            }])
            ->has('products')
            ->take(3) // limit to 3 main categories for that section
            ->get();

        return view('website.welcome', compact('categories'));
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

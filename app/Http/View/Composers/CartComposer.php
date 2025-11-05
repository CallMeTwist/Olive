<?php

namespace App\Http\View\Composers;

use App\Services\CartService;
use Illuminate\View\View;

class CartComposer
{
    public function __construct(
        protected CartService $cart
    ) {}

    /**
     * Bind data to the view.
     * @param View $view
     */
    public function compose(View $view): void
    {
        $view->with([
            'cartCount' => $this->cart->count(),
            'cartSubtotal' => $this->cart->subtotal(),
            'cartTotal' => $this->cart->total(),
        ]);
    }
}

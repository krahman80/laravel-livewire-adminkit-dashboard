<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Facades\Cart;

class ProductItem extends Component
{
    public $product;
    public $quantity;

    public function mount() {
        $this->quantity = 1;
    }

    public function addToCart() {
        Cart::add($this->product->id, $this->product->name, $this->product->getRawOriginal('unit_price'), $this->quantity);
        $this->emit('productAddedToCart');
    }

    public function render()
    {
        return view('livewire.product-item');
    }
}

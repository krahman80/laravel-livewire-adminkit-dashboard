<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.products', compact(['products']));
    }
}

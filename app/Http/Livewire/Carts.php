<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Facades\Cart;

class Carts extends Component
{
    protected $total;    
    protected $content;

    protected $listeners = ['productAddedToCart' => 'updateCart',];
    
    /**
     * render cart items
     * @return void
     */
    public function updateCart() 
    {
        $this->content = Cart::content();
        $this->total = Cart::total();
    }

    /**
     * Removes a cart item by id.
     *
     * @param string $id
     * @return void
     */
    public function removeFromCart(string $id) 
    {
        Cart::remove($id);
        $this->updateCart();
    }

    public function updateCartItem(string $id, string $action)
    {
        Cart::update($id, $action);
        $this->updateCart();
    }

    public function clearCart()
    {
        Cart::clear();
        $this->updateCart();
    }

    public function mount() 
    {
        $this->updateCart();
    }

    public function render()
    {
        return view('livewire.carts',['content' => $this->content, 'total' => $this->total]);
    }
}

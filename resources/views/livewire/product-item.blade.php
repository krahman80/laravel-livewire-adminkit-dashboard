<div>
    <h3>{{ $product->name }} - ${{ $product->unit_price }}</h3>
    <p>{{ $product->description }}</p>
    <input type="number" min="1" max="3" wire:model="quantity">
    <button wire:click="addToCart">Add To Cart</button>
    <hr/>
</div>

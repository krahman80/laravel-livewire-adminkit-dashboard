<div>
    <h1 class="my-3">Products</h1>
    @foreach ($products as $product)
        @livewire('product-item', ['product' => $product], key($product->id))
    @endforeach
    <br/>

    <script>
        // window.addEventListener('add-to-cart', event => {
        //         console.log(`product : ${event.detail.productName} with qty :  ${event.detail.qty}`);
        //     });
    </script>
</div>

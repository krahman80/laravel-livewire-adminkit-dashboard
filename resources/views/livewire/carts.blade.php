<div class="row">
    <h1 class="my-3">Cart</h1>
    <div class="col-7">
        <!-- Card-->
        <div class="card rounded shadow-sm border-1">
          <div class="card-body p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Sub total</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    
                        @if ($content->count() > 0)
                            @foreach ($content as $id => $item)
                                <tr>
                                    <td>{{ $item->get('name') }}</td>
                                    <td class="d-flex justify-content-center">
                                        <button class="btn btn-sm px-2 mx-2 btn-success shadow-none" wire:click="updateCartItem({{ $id }}, 'plus')"> + </button>
                                        {{-- <input type="text" value="{{  $item->get('quantity') }}" class="form-control form-control-sm w-25 shadow-none"/> --}}
                                        <div class="form-control form-control-sm text-center">{{  $item->get('quantity') }}</div>
                                        <button class="btn btn-sm px-2 mx-2 btn-success shadow-none" wire:click="updateCartItem({{$id}}, 'minus')"> - </button>
                                    </td>
                                    <td>${{ $item->get('price') }}</td>
                                    <td>${{ $item->get('price') * $item->get('quantity') }}</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm shadow-none" wire:click="removeFromCart({{ $id }})">Delete</button>
                                    </td>
                                </tr> 
                            @endforeach
                                <tr>
                                    <td colspan="4"> Total : ${{ $total }} </td>
                                    <td><button class="btn btn-danger btn-sm shadow-none" wire:click=clearCart>Clear</button></td>
                                </tr>
                        @else
                            <tr><td colspan="5" class="text-center">Cart is empty</td></tr>    
                        @endif
                    
                </tbody>
            </table>   
            
          </div>
        </div>
    </div>
</div>
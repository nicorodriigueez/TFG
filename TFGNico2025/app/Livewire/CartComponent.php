<?php

namespace App\Livewire;

use Livewire\Component;

class CartComponent extends Component
{

    protected $listeners = ['cartUpdated' => '$refresh'];

    public function getCartProperty(){

        return session ()->get('cart', []);

    
    }

     public function increaseQuantity($productId) {

        $cart= $this->cart;
        if(isset($cart[$productId])){

            $cart[$productId]['quantity']+=1;
            session()->put('cart', $cart);
            $this->dispatch('notify', title:'Item Increased', type:'success');
            $this->dispatch('cartUpdated');

            
        }
     }

     public function decreaseQuantity($productId) {

        $cart=$this->cart;
        if(isset($cart[$productId])){
            
            if($cart[$productId]['quantity'] > 1){
                $cart[$productId]['quantity']-=1;
                session()->put('cart', $cart);
                $this->dispatch('notify', title:'Item Decreased', type:'info');
                $this->dispatch('cartUpdated');

        }else {
            $this->removeItem($productId);
            $this->dispatch('cartUpdated');
        }
     }
 }

    public function removeItem($productId){
        $cart = $this->cart;

        unset($cart[$productId]);
        session()->put('cart', $cart);
        $this->dispatch('notify', title:'Item Removed', type:'warning');

   }
    

    public function getTotalProperty(){

     return collect($this->cart)->sum(fn($item) => $item['price'] * $item['quantity']);
    }

    public function render()
    {
        return view('livewire.cart-component',[
            'cartItems' => $this->cart,
            'total' => $this->total,
        ]);
    }
}

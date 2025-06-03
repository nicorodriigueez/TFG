<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class HomeProductFiltrerComponent extends Component
{


    public $selectedCategory = null;
    public $categories = [];

    public function mount(){
        $this->categories = Category::all();
    }

    public function filterByCategory($category_id){

        $this->selectedCategory = $category_id;

    }

    public function render()
    {
        $products = Product::with('images')-> when($this->selectedCategory,function($query){

            $query->where('category_id', $this->selectedCategory);

        })->take(12)->get();

        return view('livewire.home-product-filtrer-component',[
            'products'=> $products,
         ]);
    }
}

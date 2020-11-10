<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;


class Index extends Component
{
    public $products = [];
    public $productSingle = [];

    public function mount()
    {
        $this->products = Product::get();
    }

    public function showproduct($product)
    {
        $this->productSingle = Product::findOrFail($product);
    }
    public function render()
    {

        return view('livewire.product.index');
    }
}

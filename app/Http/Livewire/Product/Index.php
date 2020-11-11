<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;


class Index extends Component
{
    public $products;
    public $categories;

    public function mount()
    {
        $this->products = Product::get();
        $this->categories = Category::get();
    }

    public function filterProducts($category)
    {
        $this->products = Product::where('category_id',$category)->get();


    }
    public function render()
    {

        return view('livewire.product.index');
    }
}

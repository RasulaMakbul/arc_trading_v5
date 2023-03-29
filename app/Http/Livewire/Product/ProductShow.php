<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductShow extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public $product_id,  $part_number, $nsn, $description, $available_quantity, $unit_priceV, $required_quantity, $unit_priceB;
    public function render()
    {
        $products = Product::orWhere('description', 'like', '%' . $this->search . '%')->orWhere('part_number', 'like', '%' . $this->search . '%')->orWhere('nsn', 'like', '%' . $this->search . '%')->orderBy('id', 'DESC')->paginate(10);
        return view('livewire.product.product-show', ['products' => $products]);
    }
}

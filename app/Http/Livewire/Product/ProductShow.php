<?php

namespace App\Http\Livewire\Product;

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
        return view('livewire.product.product-show');
    }
}

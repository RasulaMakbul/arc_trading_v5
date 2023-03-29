<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }
    public function create()
    {
        $vendors = Vendor::all();
        $buyers = Buyer::all();
        return view('admin.product.create', compact('vendors', 'buyers'));
    }

    public function store(Request $request)
    {
        $requestData = [
            'part_number' => $request->part_number,
            'nsn' => $request->nsn,
            'description' => $request->description,
        ];
        $product = Product::create($requestData);
        if ($request->vendors) {
            foreach ($request->vendors as $key => $vendor) {
                $product->productVendor()->create([
                    'product_id' => $product->id,
                    'vendor_id' => $vendor,
                    'available_quantity' => $request->available_quantity[$key] ?? 0,
                    'unit_price' => $request->unit_price[$key] ?? 0,
                ]);
            }
        }
        if ($request->buyers) {
            foreach ($request->buyers as $key => $buyer) {
                $product->productBuyer()->create([
                    'product_id' => $product->id,
                    'buyer_id' => $buyer,
                    'required_quantity' => $request->required_quantity[$key] ?? 0,
                    'unit_price' => $request->unit_price_b[$key] ?? 0,
                ]);
            }
        }

        return redirect()->route('products')->with('success_message', 'New Item Created');
    }
}

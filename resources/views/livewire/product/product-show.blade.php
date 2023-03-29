<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        <h4>Products
                            <input type="search" class="form-control float-end mx-3" placeholder=" Type here to search" wire:model="search" style="width: 230px;">
                            <a href="{{route('products.create')}}" class="btn btn-primary float-end">
                                Add New Product
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">

                            <thead>
                                <th>SL</th>
                                <th>Part Number</th>
                                <th>NSN</th>
                                <th>Description</th>
                                <th>Vendors</th>
                                <th>Buyer</th>
                            </thead>
                            <tbody>
                                @forelse ($products as $item)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$item->part_number}}</td>
                                    <td>{{$item->nsn}}</td>
                                    <td>{{$item->description}}</td>
                                    @if ($item->productVendor)
                                    <td>
                                        <table>
                                            <tbody>
                                                @foreach ($item->productVendor as $vItem)
                                                <tr>
                                                    <td>{{$vItem->vendor->name}}</td>
                                                    <td>{{$vItem->available_quantity}}</td>
                                                    <td>{{$vItem->unit_price}}</td>
                                                </tr>

                                                @endforeach
                                                <tr></tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    @else
                                    <td>No Price Available</td>
                                    @endif
                                    @if ($item->productBuyer)
                                    <td>
                                        <table>
                                            <tbody>
                                                @foreach ($item->productBuyer as $bItem)
                                                <tr>
                                                    {{$bItem->buyer->name}}
                                                    <td>{{$bItem->required_quantity}}</td>
                                                    <td>{{$bItem->unit_price}}</td>
                                                </tr>

                                                @endforeach
                                                <tr></tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    @else
                                    <td>No Price Available</td>
                                    @endif

                                    <td>
                                        <button type="button" class="btn btn-warning" wire:click="editProduct({{$item->id}})" data-bs-toggle="modal" data-bs-target="#updateProductModal">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger" wire:click="deleteProduct({{$item->id}})" data-bs-toggle="modal" data-bs-target="#deleteProductModal">
                                            Delete
                                        </button>

                                    </td>
                                </tr>

                                @empty
                                <tr>
                                    <td colspan=" 5" class="table-active">No Available Products</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>{{$products->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

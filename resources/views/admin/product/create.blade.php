<x-admin.master>
    <x-slot:title>
        Create Product
    </x-slot:title>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>New Product</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <a href="{{route('products')}}" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <i class="fa-solid fa-bars fa-beat-fade fa-xl"></i>
                Product List
            </a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        <h4><span><i class="fa-solid fa-plus fa-bounce fa-lg"></i></span> Add New Products
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">

                                <div class="col-sm-6">
                                    <label for="part_number">Part Number</label>
                                    <input type="text" class="form-control" name="part_number" id="part_number">
                                    @error('part_number') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="nsn">#NSN</label>
                                    <input type="text" class="form-control" name="nsn" id="nsn">
                                    @error('nsn') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="col-sm-12">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control" name="description" id="description">
                                    @error('description') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group my-3">
                                <label>
                                    <h4>Vendor Information</h4>
                                </label>
                                <div class="row">
                                    @forelse ($vendors as $item)
                                    <div class="col-sm-2 p-2 border m-3">
                                        <input type="checkbox" id="vendors" name="vendors[{{$item->id}}]" value="{{$item->id}}"><span> </span>{{$item->name}}
                                        <br>
                                        <input type="number" class="form-control" id="available_quantity" name="available_quantity[{{$item->id}}]" value="{{old('available quantity')}}" placeholder="available_quantity">
                                        <br>
                                        <input type="number" class="form-control" id="unit_price" name="unit_price[{{$item->id}}]" value="{{old('unit_price')}}" placeholder="unit price">

                                    </div>

                                    @empty
                                    <h5>No Vendor Available</h5>
                                    @endforelse
                                </div>
                            </div>
                            <div class="form-group my-3">
                                <label>
                                    <h4>Buyer Information</h4>
                                </label>
                                <div class="row">
                                    @forelse ($buyers as $item)
                                    <div class="col-sm-2 p-2 border m-3">
                                        <input type="checkbox" id="buyers" name="buyers[{{$item->id}}]" value="{{$item->id}}"><span> </span>{{$item->name}}
                                        <br>
                                        <input type="number" class="form-control" id="required_quantity" name="required_quantity[{{$item->id}}]" value="{{old('required_quantity')}}" placeholder="available_quantity">
                                        <br>
                                        <input type="number" class="form-control" id="unit_price_b" name="unit_price_b[{{$item->id}}]" value="{{old('unit_price')}}" placeholder="unit price">

                                    </div>

                                    @empty
                                    <h5>No Vendor Available</h5>
                                    @endforelse
                                </div>
                            </div>
                            <div class="form-group my-3">
                                <button type="submit" class="btn btn-outline-success">Save</button>
                                <a href="{{route('products')}}" class="btn btn-danger mx-3">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.master>

<div>

    @include('livewire.partials.vendorModal')
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        <h4>Vendors
                            <input type="search" class="form-control float-end mx-3" placeholder=" Type here to search" wire:model="search" style="width: 230px;">
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#creatVendorModal">
                                Add New Vendor
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">

                            <thead>
                                <th>SL</th>
                                <th>Name</th>
                                <th>address</th>
                                <th>Contact</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @forelse ($vendors as $item)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$item->name}}</td>
                                    <td style="white-space: pre-wrap;">{{$item->address}}</td>
                                    <td>
                                        <table>
                                            <tbody>
                                                @if ($item->vendorContact)
                                                @foreach ($item->vendorContact as $cItem)
                                                <tr>
                                                    <td>
                                                        {{$cItem->contact_name}}<strong>:</strong>
                                                    </td>
                                                    <td>{{$cItem->designation}}</td>
                                                    @if ($cItem->email)
                                                    <td>{{$cItem->email}}</td>
                                                    @endif
                                                    @if ($cItem->phone)
                                                    <td>{{$cItem->phone}}</td>
                                                    @endif

                                                </tr>
                                                @endforeach

                                                @endif
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning" wire:click="editVendor({{$item->id}})" data-bs-toggle="modal" data-bs-target="#updateVendorModal">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger" wire:click="deleteVendor({{$item->id}})" data-bs-toggle="modal" data-bs-target="#deleteVendorModal">
                                            Delete
                                        </button>

                                    </td>
                                </tr>

                                @empty
                                <tr>
                                    <td colspan=" 5" class="table-active">No Available Data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>{{$vendors->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
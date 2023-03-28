<div>

    @include('livewire.partials.buyerModal')
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        <h4>Buyers
                            <input type="search" class="form-control float-end mx-3" placeholder=" Type here to search" wire:model="search" style="width: 230px;">
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#creatBuyerModal">
                                Add New Buyer
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">

                            <thead>
                                <th>SL</th>
                                <th>Name</th>
                                <th>address</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @forelse ($buyers as $item)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$item->name}}</td>
                                    <td style="white-space: pre-wrap;">{{$item->address}}</td>

                                    <td>
                                        <button type="button" class="btn btn-warning" wire:click="editBuyer({{$item->id}})" data-bs-toggle="modal" data-bs-target="#updateBuyerModal">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger" wire:click="deleteBuyer({{$item->id}})" data-bs-toggle="modal" data-bs-target="#deleteBuyerModal">
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
                        <div>{{$buyers->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
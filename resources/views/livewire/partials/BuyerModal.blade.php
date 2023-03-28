<!-- Create Buyer Modal -->
<div wire:ignore.self class="modal fade" id="creatBuyerModal" tabindex="-1" aria-labelledby="creatBuyerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="creatBuyerModalLabel">Create Buyer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveBuyer">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name">Buyer Name</label>
                        <input type="text" class="form-control" wire:model="name" name="name" id="name">
                        @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" placeholder="address" id="address" wire:model="address" name="address" style="height: 100px">{!! nl2br(old('address')) !!}</textarea>
                        @error('address') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Close</button>
                    <button type="Submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- update Buyer Modal -->
<div wire:ignore.self class="modal fade" id="updateBuyerModal" tabindex="-1" aria-labelledby="updateBuyerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5" id="updateBuyerModalLabel">Update Buyer</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="updateBuyer">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name">Buyer Name</label>
                        <input type="text" class="form-control" wire:model="name" name="name" id="name">
                        @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" placeholder="address" id="address" wire:model="address" name="address" style="height: 100px">{!! nl2br(old('address')) !!}</textarea>
                        @error('address') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Close</button>
                    <button type="Submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- delete Buyer Modal -->
<div wire:ignore.self class="modal fade" id="deleteBuyerModal" tabindex="-1" aria-labelledby="deleteBuyerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteBuyerModalLabel">Delete Buyer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="destroyBuyer">
                <h4 class="text-danger p-3 fs-6">Are you sure you want to delete ?</h4>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Close</button>
                    <button type="Submit" class="btn btn-primary">Yes! Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
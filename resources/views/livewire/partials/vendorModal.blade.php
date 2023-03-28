<!-- Create Vendor Modal -->
<div wire:ignore.self class="modal fade" id="creatVendorModal" tabindex="-1" aria-labelledby="creatVendorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="creatVendorModalLabel">Create Vendor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveVendor">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name">Vendor Name</label>
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

<!-- update Vendor Modal -->
<div wire:ignore.self class="modal fade" id="updateVendorModal" tabindex="-1" aria-labelledby="updateVendorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5" id="updateVendorModalLabel">Update Vendor</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="updateVendor">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name">Vendor Name</label>
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

<!-- delete Vendor Modal -->
<div wire:ignore.self class="modal fade" id="deleteVendorModal" tabindex="-1" aria-labelledby="deleteVendorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteVendorModalLabel">Delete Vendor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="destroyVendor">
                <h4 class="text-danger p-3 fs-6">Are you sure you want to delete ?</h4>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Close</button>
                    <button type="Submit" class="btn btn-primary">Yes! Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
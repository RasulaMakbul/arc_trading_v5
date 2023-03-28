<x-admin.master>
    <x-slot:title>
        Vendors
    </x-slot:title>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>All Vendors</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar" class="align-text-bottom"></span>
                This week
            </button>
        </div>
    </div>


    <livewire:vendor.vendor-show />

    @push('js')
    <script>
        window.addEventListener('close-modal', event => {
            $('#creatVendorModal').modal('hide');
            $('#updateVendorModal').modal('hide');
            $('#deleteVendorModal').modal('hide');
        })
    </script>

    @endpush
</x-admin.master>

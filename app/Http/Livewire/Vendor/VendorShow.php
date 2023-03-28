<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Vendor;
use Livewire\Component;
use Livewire\WithPagination;

class VendorShow extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public $vendor_id,  $name, $address;

    protected function rules()
    {
        return [
            'name' => 'required|string',
            'address' => 'required|string',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveVendor()
    {
        $validateData = $this->validate();

        Vendor::create($validateData);
        session()->flash('success_message', 'Vendor Added Successfully!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editVendor(int $id)
    {
        $vendor = Vendor::find($id);
        if ($vendor) {
            $this->vendor_id = $vendor->id;
            $this->name = $vendor->name;
            $this->address = $vendor->address;
        } else {
            return redirect()->to('/admin/vendors');
        }
    }


    public function updateVendor()
    {
        $validateData = $this->validate();

        Vendor::where('id', $this->vendor_id)->update([
            'name' => $validateData['name'],
            'address' => $validateData['address'],
        ]);
        session()->flash('success_message', 'Vendor updated Successfully!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteVendor(int $id)
    {
        $this->vendor_id = $id;
    }

    public function destroyVendor()
    {
        $vendor = Vendor::find($this->vendor_id)->delete();

        session()->flash('success_message', 'Vendor deleted Successfully!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }
    public function resetInput()
    {
        $this->name = '';
        $this->address = '';
    }


    public function render()
    {
        $vendors = Vendor::orWhere('name', 'like', '%' . $this->search . '%')->orderBy('id', 'DESC')->paginate(10);
        return view('livewire.vendor.vendor-show', ['vendors' => $vendors]);
    }
}

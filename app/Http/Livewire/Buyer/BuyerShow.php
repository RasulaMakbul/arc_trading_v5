<?php

namespace App\Http\Livewire\Buyer;

use App\Models\Buyer;
use Livewire\Component;
use Livewire\WithPagination;

class BuyerShow extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public $buyer_id,  $name, $address;

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

    public function saveBuyer()
    {
        $validateData = $this->validate();

        Buyer::create($validateData);
        session()->flash('success_message', 'Buyer Added Successfully!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editBuyer(int $id)
    {
        $buyer = Buyer::find($id);
        if ($buyer) {
            $this->buyer_id = $buyer->id;
            $this->name = $buyer->name;
            $this->address = $buyer->address;
        } else {
            return redirect()->to('/admin/buyers');
        }
    }


    public function updateBuyer()
    {
        $validateData = $this->validate();

        Buyer::where('id', $this->buyer_id)->update([
            'name' => $validateData['name'],
            'address' => $validateData['address'],
        ]);
        session()->flash('success_message', 'Buyer updated Successfully!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteBuyer(int $id)
    {
        $this->buyer_id = $id;
    }

    public function destroyBuyer()
    {
        $buyer = Buyer::find($this->buyer_id)->delete();

        session()->flash('success_message', 'Buyer deleted Successfully!');
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
        $buyers = Buyer::orWhere('name', 'like', '%' . $this->search . '%')->orderBy('id', 'DESC')->paginate(10);
        return view('livewire.buyer.buyer-show', ['buyers' => $buyers]);
    }
}

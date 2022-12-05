<?php

namespace App\Http\Livewire;

use App\Helpers\GenerateQr;
use App\Models\Ad;
use Livewire\Component;

class OrderDetail extends Component
{
    public $email, $name, $table_number, $type, $successMessage, $data, $qrCode = null, $errorMessage = null;
    public $price, $customer;

//    protected $listeners = ['generateQr' => 'generateQR'];

    public function mount()
    {
        $this->customer = session()->get('customer');
    }

    public function render()
    {
        $ads = Ad::whereActive(true)->inRandomOrder()->limit(1)->get();

        return view('livewire.order-detail', [
            'ads' => $ads,
        ]);
    }

    protected $rules = [
        'email' => 'required|email',
        'name' => 'required|string',
        'table_number' => 'required|numeric',
        'type' => 'required|in:dine_in,take_away',
    ];

    public function saveCustomer()
    {
        if (session()->has('customer')) {
            $this->errorMessage = 'Customer data already submitted';
            return;
        }
        $this->validate();
        //store detail customer to session with unique key
        session()->put('customer', [
            'email' => $this->email,
            'name' => $this->name,
            'table_number' => $this->table_number,
            'type' => $this->type,
        ]);
        //get data from session
        $this->data = session()->get('customer');
        $this->successMessage = 'Data berhasil disimpan';
        $this->resetForm();
    }

    public function generateQR($price)
    {
        $this->price = $price;
        $this->validate();
        if ($this->price > 0) {
            $this->qrCode = GenerateQr::create($this->price);
        } else {
            $this->errorMessage = 'Total harga tidak boleh kosong';
        }
    }

    private function resetForm()
    {
        $this->email = '';
        $this->name = '';
        $this->table_number = '';
        $this->type = '';
    }
}

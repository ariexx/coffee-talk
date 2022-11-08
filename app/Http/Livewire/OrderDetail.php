<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderDetail extends Component
{
    public $email, $name, $table_number, $type, $successMessage, $data;
    public function render()
    {
        return view('livewire.order-detail');
    }

    protected $rules = [
        'email' => 'required|email',
        'name' => 'required|string',
        'table_number' => 'required|numeric',
        'type' => 'required|in:dine_in,take_away',
    ];

    public function saveCustomer()
    {
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

    private function resetForm()
    {
        $this->email = '';
        $this->name = '';
        $this->table_number = '';
        $this->type = '';
    }
}

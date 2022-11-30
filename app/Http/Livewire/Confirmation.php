<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Confirmation extends Component
{
    use LivewireAlert;

    public $order_number;

    public function render()
    {
        return view('livewire.confirmation');
    }

    protected $rules = [
        'order_number' => 'required|exists:orders,order_number'
    ];

    public function confirmation()
    {
        $this->validate();
        $confirmation = Order::whereOrderNumber($this->order_number)->first();
        if ($confirmation->is_confirmation == 0) {
            $confirmation->update([
                'is_confirmation' => 1
            ]);
            $this->alert('success', 'Order berhasil dikonfirmasi', ['position' => 'center', 'timer' => 3000, 'toast' => true]);
            $this->resetForm();
        }else{
            $this->alert('error', 'Order sudah dikonfirmasi', ['position' => 'center', 'timer' => 3000, 'toast' => true]);
            $this->resetForm();
        }
    }

    public function resetForm()
    {
        $this->order_number = null;
    }
}

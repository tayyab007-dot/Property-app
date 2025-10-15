<?php

// namespace App\Livewire;

// use Livewire\Component;
// use App\Models\Order;
// use Illuminate\Support\Facades\Auth;

// class OrderForm extends Component
// {
//     public $property; // property object passed from oneshow
//     public $name;
//     public $email;
//     public $phone;
//     public $message;

//     public function submit()
//     {
//         $this->validate([
//             'name' => 'required|string|max:255',
//             'email' => 'required|email',
//             'message' => 'required|string',
//         ]);

//         Order::create([
//             'user_id' => Auth::id(),
//             'property_id' => $this->property->id,
//             'name' => $this->name,
//             'email' => $this->email,
//             'phone' => $this->phone,
//             'message' => $this->message,
//         ]);

//         session()->flash('success', 'Your message has been sent successfully!');
//         $this->reset(['name', 'email', 'phone', 'message']);
//     }

//     public function render()
//     {
//         return view('livewire.order-form');
//     }
// }












namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $whatsapp_number; // 👈 new field
    public $message;
    public $property = null; // 👈 optional

    public function mount($property = null)
    {
        $this->property = $property;
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'whatsapp_number' => 'required|string|max:20', // 👈 validation for new field
            'message' => 'required|string',
        ]);

        Order::create([
            'user_id' => Auth::id(),
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'whatsapp_number' => $this->whatsapp_number, // 👈 save new field
            'message' => $this->message,
            'property_id' => $this->property->id ?? null, // only if available
        ]);

        session()->flash('success', 'Your message has been sent successfully!');
        $this->reset(['name', 'email', 'phone','whatsapp_number', 'message']);
    }

    public function render()
    {
        return view('livewire.order-form');
    }
}

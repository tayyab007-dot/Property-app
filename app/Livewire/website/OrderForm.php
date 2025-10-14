<?php

// namespace App\Livewire;

// use Livewire\Component;
// use App\Models\Order;
// use Illuminate\Support\Facades\Auth;

// class OrderForm extends Component
// {
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
//         return view('livewire.website.properties.orderform');
//     }
// }

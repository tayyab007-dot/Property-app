<?php

namespace App\Livewire\Dashboard\Orders;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Order;

#[Layout('livewire.dashboard.layouts.app')]


class Index extends Component
{
    public function render()
    {
        $orders = Order::latest()->with('property')->get();

        return view('livewire.dashboard.orders.index', [
            'orders' => $orders,
        ]);
    }
}

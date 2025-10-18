<?php

namespace App\Livewire\website\query;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Query;
#[Layout('components.layouts.property')]

class QueryForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $whatsapp;
    public $message;

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Query::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'whatsapp' => $this->whatsapp,
            'message' => $this->message,
        ]);

        session()->flash('success', 'Your query has been sent successfully!');
        $this->reset(['name', 'email', 'phone', 'whatsapp', 'message']);
    }

    public function render()
    {
        return view('livewire.website.query.query-form');
    }
}

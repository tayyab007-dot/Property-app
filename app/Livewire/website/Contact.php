<?php

// app/Livewire/Contact.php
// namespace App\Livewire;

// use Livewire\Component;

// class Contact extends Component
// {
//     public function render()
//     {
//         return view('livewire.contact')
//             ->layout('components.layouts.property', [
//                 'title' => 'Contact Us'
//             ]);
//     }
// }






namespace App\Livewire\website;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.property')]
#[Title('Contact Us')]
class Contact extends Component
{
    public function render()
    {
        return view('livewire.website.contact');
    }
}
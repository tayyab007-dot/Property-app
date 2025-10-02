<?php


// app/Livewire/Services.php
// namespace App\Livewire;

// use Livewire\Component;

// class Services extends Component
// {
//     public function render()
//     {
//         return view('livewire.services')
//             ->layout('components.layouts.property', [
//                 'title' => 'Our Services'
//             ]);
//     }
// }





namespace App\Livewire\website;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.property')]
#[Title('Our Services')]
class Services extends Component
{
    public function render()
    {
        return view('livewire.website.services');
    }
}
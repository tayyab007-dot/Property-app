<?php

// app/Livewire/About.php
// namespace App\Livewire;

// use Livewire\Component;
// use Livewire\Attributes\Layout;

// class About extends Component
// {
//     public function render()
//     {
//         return view('livewire.about')
//             ->layout('components.layouts.property', [
//                 'title' => 'About Us'
//             ]);
//     }
// }





// app/Livewire/About.php

namespace App\Livewire\website;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.property')]
#[Title('About Us')]
class About extends Component
{
    public function render()
{
    return view('livewire.website.about');
}
}


// namespace App\Livewire;

// use Livewire\Component;
// use Livewire\Attributes\Layout;
// use Livewire\Attributes\Title;

// #[Layout('components.layouts.property')]
// #[Title('Contact Us')]
// class Contact extends Component
// {
//     public function render()
//     {
//         return view('livewire.website.contact');
//     }
// }


// namespace App\Livewire;

// use Livewire\Component;
// use Livewire\Attributes\Layout;
// use Livewire\Attributes\Title;

// #[Layout('components.layouts.property')]
// #[Title('Our Services')]
// class Services extends Component
// {
//     public function render()
//     {
//         return view('livewire.website.services');
//     }
// }
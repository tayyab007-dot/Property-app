<?php





// app/Livewire/Homepage.php
// namespace App\Livewire;

// use Livewire\Component;

// class Homepage extends Component
// {
//     public function render()
//     {
//         return view('livewire.homepage')
//             ->layout('components.layouts.property', [
//                 'title' => 'Find Your Dream Home'
//             ]);
//     }
// }






// app/Livewire/Homepage.php

namespace App\Livewire\website;

use App\Models\Property;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.property')]
#[Title('Home - Find Your Dream Property')]
class Homepage extends Component
{
    public $featuredProperties;
    public function mount(){
        $this->featuredProperties = Property::where('status', 'draft')
        ->latest()
        ->take(6)
        ->get();
    }
    public function render()
    {
        return view('livewire.website.homepage');
    }
}
<?php

namespace App\Livewire\Dashboard\Properties;

use Livewire\Component;
use Livewire\Attributes\Layout;
// use Livewire\Component;
use App\Models\Property;
#[Layout('livewire.dashboard.layouts.app')]
class Show extends Component
{
    public $property;

    public function mount($id){
        $this->property = Property::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.dashboard.properties.show');
    }
}

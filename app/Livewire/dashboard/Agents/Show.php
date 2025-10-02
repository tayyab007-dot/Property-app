<?php

namespace App\Livewire\Dashboard\Agents;

use App\Models\Agent;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('livewire.dashboard.layouts.app')]
class Show extends Component
{

    public $agent;
    public function mount($agent){
        $this->agent = Agent::with('user')->findorFail($agent);
    }

    public function render()
    {
        return view('livewire.dashboard.agents.show');
    }
}

<?php

namespace App\Livewire\Dashboard\Reports;

use App\Models\Agent;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.dashboard.layouts.app')]
class AgentReports extends Component
{
    public $agents;

    public function mount(){
        $this->agents = Agent::withCount('properties')->get();
    }
    public function render()
    {
        return view('livewire.dashboard.reports.agent-reports');
    }
}

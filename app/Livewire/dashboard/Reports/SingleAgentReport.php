<?php

namespace App\Livewire\Dashboard\Reports;

use App\Models\Agent;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.dashboard.layouts.app')]
class SingleAgentReport extends Component
{

     public $agent;

    public function mount($agent)
    {
        $this->agent = Agent::with('properties')->findOrFail($agent);
    }
    public function render()
    {
        return view('livewire.dashboard.reports.single-agent-report');
    }
}

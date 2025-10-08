<?php

// namespace App\Livewire\Dashboard\Reports;

// use App\Models\Agent;
// use Livewire\Attributes\Layout;
// use Livewire\Component;

// #[Layout('livewire.dashboard.layouts.app')]
// class AgentReports extends Component
// {
//     public $agents;
//     public $search;

//     public function mount(){
//         $this->agents = Agent::withCount('properties')->get();
//     }
//     // public function render()
//     // {
//     //     $agents = Agent::query()
//     //      ->when($this->search, function ($query) {
//     //             $query->where('agency_name', 'like', '%' . $this->search . '%')
//     //                   ->orWhere('email', 'like', '%' . $this->search . '%');
//     //                 //   ->orWhere('address', 'like', '%' . $this->search . '%');
//     //         })
//     //         ->latest()
//     //         ->get();
//     //     return view('livewire.dashboard.reports.agent-reports',[
//     //         'agents' => $agents
//     //     ]);
//     // }
//     public function render()
// {
//     $agents = Agent::query()
//         ->when($this->search, function ($query) {
//             $query->where('agency_name', 'like', '%' . $this->search . '%')
//                   ->orWhere('email', 'like', '%' . $this->search . '%');
//         })
//         ->withCount('properties')
//         ->latest()
//         ->get();

//     return view('livewire.dashboard.reports.agent-reports', [
//         'agents' => $agents,
//     ]);
// }

// }









namespace App\Livewire\Dashboard\Reports;

use App\Models\Agent;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.dashboard.layouts.app')]
class AgentReports extends Component
{
    public $search = '';

    public function render()
{
    $agents = Agent::query()
        ->when($this->search, function ($query) {
            $query->where('agency_name', 'like', '%' . $this->search . '%')
                  ->orWhere('email', 'like', '%' . $this->search . '%');
        })
        ->withCount('properties')
        ->latest()
        ->get();

    return view('livewire.dashboard.reports.agent-reports', [
        'agents' => $agents,
    ]);
}

}

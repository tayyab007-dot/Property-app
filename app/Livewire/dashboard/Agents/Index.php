<?php

namespace App\Livewire\Dashboard\Agents;

use App\Models\Agent;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.dashboard.layouts.app')]


class Index extends Component
{

     public function delete($id)
    {
        $agent = Agent::findOrFail($id);
        $agent->delete();

        // refresh the table and flash success message
        $this->dispatch('$refresh');
        session()->flash('success', 'Agent deleted successfully!');
    }


    //  public $confirmingDelete = false;
    // public $deleteId;

    // Delete confirmation
    // public function confirmDelete($id)
    // {
    //     $this->confirmingDelete = true;
    //     $this->deleteId = $id;
    // }

    // public function delete()
    // {
    //     Agent::findOrFail($this->deleteId)->delete();

    //     $this->confirmingDelete = false;
    //     $this->deleteId = null;

    //     session()->flash('success', 'Agent deleted successfully!');
    // }

    public function render()
    {
        $agents = Agent::with('user')->get();
        return view('livewire.dashboard.agents.index',[
            'agents' => $agents,
        ]);
    }
}

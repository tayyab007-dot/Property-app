<?php

namespace App\Livewire\Dashboard\Agents;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Agent;

#[Layout('livewire.dashboard.layouts.app')]

class Edit extends Component
{
    use WithFileUploads;

    public $agent;
    public $agency_name, $license_no, $phone_number, $email, $address, $bio, $profile_image, $is_verified;

    public function mount(Agent $agent)
    {
        $this->agent = $agent;
        $this->agency_name   = $agent->agency_name;
        $this->license_no    = $agent->license_no;
        $this->phone_number  = $agent->phone_number;
        $this->email         = $agent->email;
        $this->address       = $agent->address;
        $this->bio           = $agent->bio;
        $this->is_verified   = $agent->is_verified;
    }

    public function update()
    {
        $this->validate([
            'agency_name'   => 'nullable|string|max:255',
            'license_no'    => 'nullable|string|max:255',
            'phone_number'  => 'nullable|string|max:20',
            'email'         => 'nullable|email',
            'address'       => 'nullable|string|max:255',
            'bio'           => 'nullable|string',
            'profile_image' => 'nullable|image|max:2048',
        ]);

        $imagePath = $this->agent->profile_image;
        if ($this->profile_image) {
            $imagePath = $this->profile_image->store('agents', 'public');
        }

        $this->agent->update([
            'agency_name'   => $this->agency_name,
            'license_no'    => $this->license_no,
            'phone_number'  => $this->phone_number,
            'email'         => $this->email,
            'address'       => $this->address,
            'bio'           => $this->bio,
            'profile_image' => $imagePath,
            'is_verified'   => $this->is_verified,
        ]);

        session()->flash('success', 'Agent updated successfully!');
        return redirect()->route('dashboard.agents.index');
    }

    public function render()
    {
        return view('livewire.dashboard.agents.edit');
    }
}


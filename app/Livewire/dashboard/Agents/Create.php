<?php

namespace App\Livewire\Dashboard\Agents;

// use App\Models\Agent;
// use Auth;
// use Livewire\Attributes\Layout;
// use Livewire\Component;
// use Livewire\WithFileUploads;

// #[Layout('livewire.dashboard.layouts.app')]

// class Create extends Component
// {
//     use WithFileUploads;

//     public $agency_name, $license_no, $phone_number, $email, $address, $bio, $profile_image;

//     public function store()
//     {
//         $this->validate([
//             'agency_name'   => 'nullable|string|max:255',
//             'license_no'    => 'nullable|string|max:255',
//             'phone_number'  => 'nullable|string|max:20',
//             'email'         => 'nullable|email',
//             'address'       => 'nullable|string|max:255',
//             'bio'           => 'nullable|string',
//             'profile_image' => 'nullable|image|max:2048', // 2MB
//         ]);

//         $imagePath = null;
//         if ($this->profile_image) {
//             $imagePath = $this->profile_image->store('agents', 'public');
//         }

//         Agent::create([
//             'user_id'       => Auth::id(),
//             'agency_name'   => $this->agency_name,
//             'license_no'    => $this->license_no,
//             'phone_number'  => $this->phone_number,
//             'email'         => $this->email,
//             'address'       => $this->address,
//             'bio'           => $this->bio,
//             'profile_image' => $imagePath,
//             'is_verified'   => false,
//         ]);

//         session()->flash('success', 'Agent created successfully!');
//         return redirect()->route('dashboard.agents.index'); // adjust if you have index route
//     }

//     public function render()
//     {
//         return view('livewire.dashboard.agents.create');
//     }
// }










use App\Models\User;
use App\Models\Agent;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('livewire.dashboard.layouts.app')]

class Create extends Component
{
    use WithFileUploads;

    public $agency_name, $license_no, $phone_number, $email, $address, $bio, $profile_image, $is_verified = false;

    public function store()
    {
        $this->validate([
            'agency_name'   => 'nullable|string|max:255',
            'license_no'    => 'required|string|max:255',
            'phone_number'  => 'nullable|string|max:20',
            'email'         => 'required|email|unique:users,email', // ✅ must be unique
            'address'       => 'nullable|string|max:255',
            'bio'           => 'nullable|string',
            'profile_image' => 'nullable|image|max:2048',
            'is_verified'   => 'nullable|boolean',
        ]);

        $imagePath = null;
        if ($this->profile_image) {
            $imagePath = $this->profile_image->store('agents', 'public');
        }

        // 1️⃣ Create User (for login)
        $user = User::create([
            'name'     => $this->agency_name ?? 'Agent',
            'email'    => $this->email,
            'password' => Hash::make('password'), // default password
        ]);

        // 2️⃣ Assign Agent Role
        $user->assignRole('agent');

        // 3️⃣ Create Agent Profile
        Agent::create([
            'user_id'       => $user->id,
            'agency_name'   => $this->agency_name,
            'license_no'    => $this->license_no,
            'phone_number'  => $this->phone_number,
            'email'         => $this->email,
            'address'       => $this->address,
            'bio'           => $this->bio,
            'profile_image' => $imagePath,
            'is_verified'   => (bool) $this->is_verified,
        ]);

        session()->flash('success', 'Agent created successfully! Default password: password123');
        return redirect()->route('dashboard.agents.index');
    }

    public function render()
    {
        return view('livewire.dashboard.agents.create');
    }
}

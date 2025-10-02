<?php


// namespace App\Livewire\Dashboard\Properties;

// use Livewire\Component;
// use Livewire\Attributes\Layout;
// use Auth;
// use App\Models\Property;

// #[Layout('livewire.dashboard.layouts.app')]
// class Create extends Component
// {

//     public function render()
//     {
//         return view('livewire.dashboard.properties.create');
//     }

//     public $title = '';
//     public $description  = '';
//     public $price  = '';
//     public $type  = 'sale';
//     public $property_type  = 'house';
//     public $bedrooms  = null;
//     public $bathrooms  = null;
//     public $area  = null;
//     public $address  = '';
//     public $latitude  = null;
//     public $longitude  = null;
//     public $status  = null;
    
//     public function save(){
//         $this->validate([
//             'title' => 'required|string|max:255',
//             'description' => 'required|string',
//             'price' => 'required|numeric|min:0',
//             'type' => 'required|in:sale,rent',
//             'property_type' => 'required|in:house,plot,apartment,shop',
//             'bedrooms' => 'nullable|integer|min:0',
//             'bathrooms' => 'nullable|integer|min:0',
//             'area' => 'nullable|numeric|min:0',
//             'address' => 'required|string|max:255',
//             'latitude' => 'nullable|numeric',
//             'longitude' => 'nullable|numeric',
//  ]);

//         // Debug: Check authentication
//         if (!Auth::check()) {
//             session()->flash('error', 'You must be logged in to create a property.');
//             return redirect()->route('login');
//         }

//             try {
//                 Property::create([
//                     'user_id'       => Auth::id(),
//                     'title'         => $this->title,
//                     'description'   => $this->description,
//                     'price'         => $this->price,
//                     'type'          => $this->type,
//                     'property_type' => $this->property_type,
//                     'bedrooms'      => $this->bedrooms,
//                     'bathrooms'     => $this->bathrooms,
//                     'area'          => $this->area,
//                     'address'       => $this->address,
//                     'latitude'      => $this->latitude,
//                     'longitude'     => $this->longitude,
//                     'status'        => 'draft',
//                 ]);

//                 // session()->flash('message', 'Property created successfully!');
//     session()->flash('success', 'Property Created successfully!');

//                 return redirect()->route('dashboard.properties.index');
//                 // session()->flash('success', 'Property updated successfully!');


//             } catch (\Exception $e) {
//                 session()->flash('error', 'Error creating property: ' . $e->getMessage());
//             }
       
//     }

// }































// namespace App\Livewire\Dashboard\Properties;

// use Livewire\Component;
// use Livewire\Attributes\Layout;
// use Livewire\WithFileUploads; // <-- ADD THIS
// use Auth;
// use App\Models\Property;
// use App\Models\PropertyImage; // <-- ADD THIS

// #[Layout('livewire.dashboard.layouts.app')]
// class Create extends Component
// {
//     use WithFileUploads; // <-- ADD THIS

//     // ... your existing form fields (title, description, etc.) ...
// public $title = '';
//     public $description  = '';
//     public $price  = '';
//     public $type  = 'sale';
//     public $property_type  = 'house';
//     public $bedrooms  = null;
//     public $bathrooms  = null;
//        public $status = 'draft';
//     public $area  = null;
//     public $address  = '';
//     public $latitude  = null;
//     public $longitude  = null;
//     // public $status  = null;
//     public $images = []; // <-- ADD THIS: Will hold the uploaded files temporarily
//      public $amenities = [];

//     public function save(){
//         // 1. Validate main property data AND the images
//         $this->validate([
//             // ... your existing validation rules ...
//             'title' => 'required|string|max:255',
//             'description' => 'required|string',
//             'price' => 'required|numeric|min:0',
//             'type' => 'required|in:sale,rent',
//             'property_type' => 'required|in:house,plot,apartment,shop',
//             'bedrooms' => 'nullable|integer|min:0',
//             'bathrooms' => 'nullable|integer|min:0',
//             'area' => 'nullable|numeric|min:0',
//             'address' => 'required|string|max:255',
//             'latitude' => 'nullable|numeric',
//             'longitude' => 'nullable|numeric',
            
//             // ... other rules ...,
            
//             // ADD validation for images
//             'images.*' => 'image|max:2048', // Each image must be <2MB
//             'images' => 'max:5', // Maximum 5 images allowed
//             'amenities' => 'array'
//         ]);

//         if (!Auth::check()) {
//             session()->flash('error', 'You must be logged in.');
//             return redirect()->route('login');
//         }

//         try {
//             // 2. Create the Property first (so we have an ID)
//             $property = Property::create([
//                     'user_id'       => Auth::id(),
                    
//                     'title'         => $this->title,
//                     'description'   => $this->description,
//                     'price'         => $this->price,
//                     'type'          => $this->type,
//                     'property_type' => $this->property_type,
//                     'bedrooms'      => $this->bedrooms,
//                     'bathrooms'     => $this->bathrooms,
//                     'area'          => $this->area,
//                     'address'       => $this->address,
//                     'latitude'      => $this->latitude,
//                     'longitude'     => $this->longitude,
//                     'amenities' => $this->amenities, // Livewire handles the JSON conversion here
//             'published_at' => $this->status === 'published' ? now() : null,
//                     // 'status'        => 'draft'
                
//             ]);

           

//             if ($this->images){
//                 foreach ($this->images as $image){
//                     $path = $image->store('properties', 'public');
//                     PropertyImage::create([
//                         'property_id' => $property->id,
//                         'path' => $path,
//                     ]);
//                 }
//             }

//             session()->flash('success', 'Property and images created successfully!');
//             return redirect()->route('dashboard.properties.index');

//         } catch (\Exception $e) {
//             session()->flash('error', 'Error: ' . $e->getMessage());
//         }
//     }

//     public function render()
//     {
//         return view('livewire.dashboard.properties.create');
//     }
// }

































namespace App\Livewire\Dashboard\Properties;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\Agent;

#[Layout('livewire.dashboard.layouts.app')]
class Create extends Component
{
    use WithFileUploads;

    public $title = '';
    public $description = '';
    public $price = '';
    public $type = 'sale';
    public $property_type = 'house';
    public $bedrooms = null;
    public $bathrooms = null;
    public $status = 'draft';
    public $area = null;
    public $address = '';
    public $latitude = null;
    public $longitude = null;
    public $images = [];
    public $amenities = [];

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'type' => 'required|in:sale,rent',
            'property_type' => 'required|in:house,plot,apartment,shop',
            'bedrooms' => 'nullable|integer|min:0',
            'bathrooms' => 'nullable|integer|min:0',
            'area' => 'nullable|numeric|min:0',
            'address' => 'required|string|max:255',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'images.*' => 'image|max:2048',
            'images' => 'max:5',
            'amenities' => 'array'
        ]);

        if (!Auth::check()) {
            session()->flash('error', 'You must be logged in.');
            return redirect()->route('login');
        }

        try {
            // Find the agent profile associated with the authenticated user
            $agentProfile = Agent::where('user_id', Auth::id())->first();

            // Check if an agent profile exists - PROPERLY handle the return
            if (!$agentProfile) {
                session()->flash('error', 'You must have an agent profile to create a property.');
                return null; // Properly return null to stop execution
            }

            // Create the Property with the agent_id
            $property = Property::create([
                'user_id' => Auth::id(),
                'agent_id' => $agentProfile->id, // This is crucial
                'title' => $this->title,
                'description' => $this->description,
                'price' => $this->price,
                'type' => $this->type,
                'property_type' => $this->property_type,
                'bedrooms' => $this->bedrooms,
                'bathrooms' => $this->bathrooms,
                'area' => $this->area,
                'address' => $this->address,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
                'amenities' => $this->amenities,
                'status' => $this->status, // Add this line
                'published_at' => $this->status === 'published' ? now() : null,
            ]);

            // Check if images were uploaded and process them
            if ($this->images) {
                foreach ($this->images as $image) {
                    $path = $image->store('properties', 'public');
                    PropertyImage::create([
                        'property_id' => $property->id,
                        'path' => $path,
                    ]);
                }
            }

            session()->flash('success', 'Property created successfully!');
            return redirect()->route('dashboard.properties.index');
            
        } catch (\Exception $e) {
            session()->flash('error', 'Error: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.dashboard.properties.create');
    }
}
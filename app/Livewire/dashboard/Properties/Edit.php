<?php

// namespace App\Livewire\Dashboard\Properties;

// use App\Models\Property;
// use Livewire\Component;
// use Livewire\Attributes\Layout;
// use Livewire\Attributes\Rule;
// use Illuminate\Support\Facades\Auth;

// #[Layout('livewire.dashboard.layouts.app')]
// class Edit extends Component
// {
//     public Property $property;

//     #[Rule('required|string|max:255')]
//     public $title;

//     #[Rule('nullable|string|max:1000')]
//     public $description;

//     #[Rule('required|in:sale,rent')]
//     public $type;
    
//     #[Rule('required|in:house,plot,apartment,shop')]
//     public $property_type;

//     #[Rule('required|in:draft,published,sold,rented')]
//     public $status;

//     #[Rule('required|numeric|min:0')]
//     public $price;

//     #[Rule('required|string|max:500')]
//     public $address;

//     #[Rule('nullable|numeric')]
//     public $bedrooms;

//     #[Rule('nullable|numeric')]
//     public $bathrooms;

//     #[Rule('nullable|numeric')]
//     public $area;

//     #[Rule('nullable|numeric|between:-90,90')]
//     public $latitude;

//     #[Rule('nullable|numeric|between:-180,180')]
//     public $longitude;

//    public function mount(Property $property)  // Change back to Property object
// {
//     // Check ownership
//     if ($property->user_id !== Auth::id()) {
//         abort(403, 'Unauthorized action.');
//     }

//     $this->property = $property;
//     $this->title = $property->title;
//     $this->description = $property->description;
//     $this->type = $property->type;
//     $this->property_type = $property->property_type;
//     $this->status = $property->status;
//     $this->price = $property->price;
//     $this->address = $property->address;
//     $this->bedrooms = $property->bedrooms;
//     $this->bathrooms = $property->bathrooms;
//     $this->area = $property->area;
//     $this->latitude = $property->latitude;
//     $this->longitude = $property->longitude;

//     }

//     public function updateProperty()
//     {
//         $this->validate();

//         // Update the property
//         $this->property->update([
//             'title' => $this->title,
//             'description' => $this->description,
//             'type' => $this->type,
//             'property_type' => $this->property_type,
//             'status' => $this->status,
//             'price' => $this->price,
//             'address' => $this->address,
//             'bedrooms' => $this->bedrooms,
//             'bathrooms' => $this->bathrooms,
//             'area' => $this->area,
//             'latitude' => $this->latitude,
//             'longitude' => $this->longitude,
//         ]);

//         return redirect()->route('dashboard.properties.index')
//     ->with('success', 'Property updated successfully.');

//     }

//     public function render()
//     {
//         return view('livewire.dashboard.properties.edit');
//     }
// }




































namespace App\Livewire\Dashboard\Properties;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Property;
use Livewire\WithFileUploads;
use App\Models\PropertyImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

#[Layout('livewire.dashboard.layouts.app')]
class Edit extends Component
{
    public Property $property;
    use WithFileUploads;

    public $newImages = []; // For new images
    // Form fields
    public $title;
    public $description;
    public $price;
    public $type;
    public $property_type;
    public $status;
    public $bedrooms;
    public $bathrooms;
    public $area;
    public $address;
    public $latitude;
    public $longitude;
        public $amenities = [];

    // Validation rules
    protected $rules = [
        'title'         => 'required|string|max:255',
        'description'   => 'required|string',
        'price'         => 'required|numeric|min:0',
        'type'          => 'required|in:sale,rent',
        'property_type' => 'required|in:house,plot,apartment,shop',
        'status'        => 'required|string',
        'bedrooms'      => 'nullable|integer|min:0',
        'bathrooms'     => 'nullable|integer|min:0',
        'area'          => 'nullable|numeric|min:0',
        'address'       => 'required|string|max:255',
        'latitude'      => 'nullable|numeric',
        'longitude'     => 'nullable|numeric',
        
         'amenities' => 'array'
        
    ];

    public function mount(Property $property)
    {
        $this->property      = $property;
        $this->title         = $property->title;
        $this->description   = $property->description;
        $this->price         = $property->price;
        $this->type          = $property->type;
        $this->property_type = $property->property_type;
        $this->status        = $property->status;
        $this->bedrooms      = $property->bedrooms;
        $this->bathrooms     = $property->bathrooms;
        $this->area          = $property->area;
        $this->address       = $property->address;
        $this->latitude      = $property->latitude;
        $this->longitude     = $property->longitude;

         $this->amenities = $property->amenities ?? [];
    }

    public function deleteImage($imageId){
        $image = PropertyImage::findOrFail($imageId);

         // Delete file from storage
        Storage::disk('public')->delete($image->path);

        // Delete record from database
        $image->delete();
        // session()->flash('success', 'Image deleted successfully!');
    }

   public function updateProperty()
{
    $this->validate();

    $this->property->update([
        'title'         => $this->title,
        'description'   => $this->description,
        'price'         => $this->price,
        'type'          => $this->type,
        'property_type' => $this->property_type,
        'status'        => $this->status,
        'bedrooms'      => $this->bedrooms,
        'bathrooms'     => $this->bathrooms,
        'area'          => $this->area,
        'address'       => $this->address,
        'latitude'      => $this->latitude,
        'longitude'     => $this->longitude,
        'newImages'     => $this->newImages, // Handle new images
        'images'        => 'max:5', // Handle new images

        'amenities' => $this->amenities,
    ]);

    if ($this->newImages){
        foreach ($this->newImages as $image){
            $path = $image->store('properties', 'public');
            PropertyImage::create([
                'property_id' => $this->property->id,
                'path' => $path,
            ]);
        }
    }

    // USE session()->flash() INSTEAD OF dispatch()
    session()->flash('success', 'Property updated successfully!');

    return $this->redirect(route('dashboard.properties.index'), navigate: true);
}


    public function render()
    {
        return view('livewire.dashboard.properties.edit');
    }
}












































    

    // public function mount($id){
    //     if (!Auth::check()) {
    //         session()->flash('error', 'You must be logged in to create a property.');
    //         return redirect()->route('login');
    //     }

    //         try {
    //             Property::create([
    //                 'user_id'       => Auth::id(),
    //                 'title'         => $this->title,
    //                 'description'   => $this->description,
    //                 'price'         => $this->price,
    //                 'type'          => $this->type,
    //                 'property_type' => $this->property_type,
    //                 'bedrooms'      => $this->bedrooms,
    //                 'bathrooms'     => $this->bathrooms,
    //                 'area'          => $this->area,
    //                 'address'       => $this->address,
    //                 'latitude'      => $this->latitude,
    //                 'longitude'     => $this->longitude,
    //                 'status'        => 'draft',
    //             ]);

    //             session()->flash('message', 'Property updated successfully!');
    //             return redirect()->route('dashboard.properties.index');

    //         } catch (\Exception $e) {
    //             session()->flash('error', 'Error creating property: ' . $e->getMessage());
    //         }
       
    
    // }

   

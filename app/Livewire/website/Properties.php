<?php

// namespace App\Livewire;

// use Livewire\Component;

// class Properties extends Component
// {
//     public function render()
//     {
//         return view('livewire.properties') // ← Make sure it's 'livewire.properties'
//             ->layout('components.layouts.property', [
//                 'title' => 'Properties - Our Listings'
//             ]);
//     }
// }





namespace App\Livewire\website;

use Livewire\Component;
use App\Models\Property;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Layout('components.layouts.property')]
#[Title('Properties - Browse Listings')]
class Properties extends Component
{
    use WithPagination;

    public $search = '';
    public $propertyType = '';
    public $minPrice = null;
    public $maxPrice = null;
    public $bedrooms = '';
    public $sortBy = 'newest';

    public function render()
    {
        $query = Property::query();

        // Search
        if ($this->search) {
            $query->where(function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                  ->orWhere('address', 'like', '%' . $this->search . '%')
                  ->orWhere('city', 'like', '%' . $this->search . '%');
            });
        }

        // Property Type Filter
        if ($this->propertyType) {
            $query->where('property_type', $this->propertyType);
        }

        // Price Range Filter
        if ($this->minPrice) {
            $query->where('price', '>=', $this->minPrice);
        }
        if ($this->maxPrice) {
            $query->where('price', '<=', $this->maxPrice);
        }

        // Bedrooms Filter
        if ($this->bedrooms) {
            $query->where('bedrooms', '>=', $this->bedrooms);
        }

        // Sorting
        switch ($this->sortBy) {
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            case 'featured':
                $query->where('featured', true)->latest();
                break;
            default:
                $query->latest(); // 'newest' first
                break;
        }

        $properties = $query->paginate(12);

        return view('livewire.website.properties.index', [
            'properties' => $properties,
        ]);
    }
}

// namespace App\Livewire\website;

// use Livewire\Component;
// use Livewire\Attributes\Layout;
// use Livewire\Attributes\Title;
// use App\Models\Property;



// #[Layout('components.layouts.property')]
// #[Title('Properties - Browse Listings')]
// class OneProperty extends Component
// {
    
//     public Property $property;

//     public function mount(Property $property)
//     {
//         $this->property = $property;
//     }

//     public function render()
//     {
//         return view('livewire.website.properties.oneshow');
//     }
// }



namespace App\Livewire\website;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\Property;



#[Layout('components.layouts.property')]
#[Title('Properties - Browse Listings')]

class OneProperty extends Component
{
    public Property $property;

    public function mount(Property $property): void
    {
        $this->property = $property;
    }

    public function render()
    {
        // Build a 'similar properties' query using available columns
        $similarQuery = Property::query()
            ->where('id', '!=', $this->property->id);

        // Prefer matching by property_type if available, otherwise by type
        if (!empty($this->property->property_type)) {
            $similarQuery->where('property_type', $this->property->property_type);
        } elseif (!empty($this->property->type)) {
            $similarQuery->where('type', $this->property->type);
        }

        $similarProperties = $similarQuery
            ->latest()
            ->take(6)
            ->get();

        return view('livewire.website.properties.oneshow', [
            'property' => $this->property,
            'similarProperties' => $similarProperties,
        ]);
    }
}













// namespace App\Livewire;

// use Livewire\Component;
// use App\Models\Order;
// use Illuminate\Support\Facades\Auth;

// class OrderForm extends Component
// {
//     public $name;
//     public $email;
//     public $phone;
//     public $message;

//     public function submit()
//     {
//         $this->validate([
//             'name' => 'required|string|max:255',
//             'email' => 'required|email',
//             'message' => 'required|string',
//         ]);

//         Order::create([
//             'user_id' => Auth::id(),
//             'name' => $this->name,
//             'email' => $this->email,
//             'phone' => $this->phone,
//             'message' => $this->message,
//         ]);

//         session()->flash('success', 'Your message has been sent successfully!');
//         $this->reset(['name', 'email', 'phone', 'message']);
//     }

//     public function render()
//     {
//         // return view('livewire.order-form');
//          return view('livewire.website.properties.oneshow', [
//             'property' => $this->property,
            
//         ]);
//     }

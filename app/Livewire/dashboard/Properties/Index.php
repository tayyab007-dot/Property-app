<?php


// namespace App\Livewire\Dashboard\Properties;

// use Livewire\Component;
// use Livewire\Attributes\Layout;
// use Auth;
// use App\Models\Property;

// #[Layout('livewire.dashboard.layouts.app')]
// class Index extends Component
// {
 

//      // Delete property function
//     public function delete($id){
//     $property = Property::findOrFail($id);
//     $property->delete();
//     $this->dispatch('$refresh');
//     session()->flash('success', 'Property Deleted successfully!');
//  // Force component refresh
// }

//    public function render()
//     {
//         $properties = Property::latest()->get();
//         return view('livewire.dashboard.properties.index', [
//             'properties' => $properties
//         ]);
//     }
// }






















namespace App\Livewire\Dashboard\Properties;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Property;

#[Layout('livewire.dashboard.layouts.app')]
class Index extends Component
{
    public $search = ''; // 🔍 Search property

    // Delete property function
    public function delete($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();
        $this->dispatch('$refresh');
        session()->flash('success', 'Property Deleted successfully!');
    }

    public function render()
    {
        $properties = Property::query()
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                      ->orWhere('type', 'like', '%' . $this->search . '%')
                      ->orWhere('address', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->get();

        return view('livewire.dashboard.properties.index', [
            'properties' => $properties
        ]);
    }
}






































// namespace App\Livewire\Dashboard\Properties;

// use Livewire\Component;
// use Livewire\Attributes\Layout;
// use Livewire\WithPagination;
// use App\Models\Property;

// #[Layout('livewire.dashboard.layouts.app')]
// class Index extends Component
// {
//     use WithPagination;
    
//     public $search = '';
//     public $statusFilter = '';
//     public $typeFilter = '';
    
//     // Delete property function
//     public function delete($id)
//     {
//         $property = Property::findOrFail($id);
//         $property->delete();
        
//         session()->flash('message', 'Property deleted successfully!');
//     }
    
//     // Reset filters
//     public function resetFilters()
//     {
//         $this->reset(['search', 'statusFilter', 'typeFilter']);
//     }
    
//     public function render()
//     {
//         $properties = Property::query()
//             ->when($this->search, function ($query) {
//                 $query->where('title', 'like', '%' . $this->search . '%')
//                       ->orWhere('address', 'like', '%' . $this->search . '%');
//             })
//             ->when($this->statusFilter, function ($query) {
//                 $query->where('status', $this->statusFilter);
//             })
//             ->when($this->typeFilter, function ($query) {
//                 $query->where('type', $this->typeFilter);
//             })
//             ->orderBy('created_at', 'desc')
//             ->paginate(10);
            
//         return view('livewire.dashboard.properties.index', [
//             'properties' => $properties
//         ]);
//     }
// }
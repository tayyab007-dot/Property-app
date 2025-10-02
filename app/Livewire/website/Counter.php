<?php
 
namespace App\Livewire\website;
 
use Livewire\Component;
 
class Counter extends Component
{
    public $count = 1;
    public $name = 'Muhammad Tayyab';
    
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
 
    public function render()
    {
        return view('livewire.counter');
    }
}
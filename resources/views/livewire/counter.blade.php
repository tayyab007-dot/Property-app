{{-- <div>
    <h1>{{$name}}</h1>
    <h1>{{ $count }}</h1>
 
    <button wire:click="increment">+</button>
 
    <button wire:click="decrement">-</button>
</div> --}}


<div class="text-center p-8 border-2 border-blue-500 rounded-lg max-w-md mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Livewire Counter</h1>
    
    <!-- Display the current count -->
    <p class="text-4xl font-mono mb-6">{{ $count }}</p>
    
    <!-- Buttons to call the actions -->
    <div class="space-x-4">
        <button wire:click="decrement" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            -
        </button>
        
        <button wire:click="increment" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            +
        </button>
    </div>

    <p class="text-sm text-gray-500 mt-4">Click the buttons! The page doesn't refresh, but the number updates!</p>
</div>
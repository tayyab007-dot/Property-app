{{-- resources/views/test-content.blade.php --}}
{{-- <x-layouts.property title="Test Page">
    <div class="container mt-5">
        <h1>My Livewire Content Should Appear Here</h1>
        <p>This is inside the {{ $slot }} area</p>
        
        <!-- Test your Livewire counter -->
        <livewire:counter />
    </div>
</x-layouts.property> --}}




{{-- resources/views/test-content.blade.php --}}
{{-- @extends('components.layouts.property', ['title' => 'Test Page'])

@section('content')
    <div class="container mt-5">
        <h1>My Livewire Content Should Appear Here</h1>
        <p>This is inside the content section</p>
        
        <livewire:counter />
    </div>
@endsection --}}



<x-layouts.property title="Test Page">
    <x-slot name="slot">
        <h1>TEST CONTENT - If you see this, slot is working!</h1>
    </x-slot>
</x-layouts.property>
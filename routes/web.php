<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\Properties;
// use resources\views\test-assets;
use App\Livewire\Counter;
// use App\Livewire\Properties;
use App\Livewire\Properties\Index;
use App\Livewire\Properties\Create;
use App\Livewire\Properties\Show;
use Livewire\Livewire;


// use App\Livewire\Dashboard\Properties;

// Route::get('/dashboard/properties', Properties::class)->name('dashboard.properties');
// Route::get('/dashboard/properties/create', Properties::class)->name('dashboard.properties.create');


Route::get('/dashboard', App\Livewire\Dashboard\Dashboard::class)->name('dashboard');
Route::get('/dashbaord/properties/index', \App\Livewire\Dashboard\Properties\Index::class)->name('dashboard.properties.index'); // Fixed typo: 'propertiess' to 'properties'
Route::get('/dashboard/properties/create', \App\Livewire\Dashboard\Properties\Create::class)->name('dashboard.properties.create'); // Fixed typo: 'propertiess' to 'properties'
Route::get('/dashboard/properties/{property}/edit', \App\Livewire\Dashboard\Properties\Edit::class)->name('dashboard.properties.edit');
Route::get('dashboard/properties/show/{id}', \App\Livewire\Dashboard\Properties\Show::class)->name('dashboard.properties.show');

// Route::get('/dashboard/agents', \App\Livewire\Dashboard\Agents\Index::class)->name('dashboard.agents.index');
// Route::get('/dashboard/agents/create', \App\Livewire\Dashboard\Agents\Create::class)->name('dashboard.agents.create');
// Route for Livewire dashboard component
// ...existing code...


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/agents', \App\Livewire\Dashboard\Agents\Index::class)->name('dashboard.agents.index');
    Route::get('/dashboard/agents/create', \App\Livewire\Dashboard\Agents\Create::class)->name('dashboard.agents.create');
    Route::get('/dashboard/agents/{agent}/edit', \App\Livewire\Dashboard\Agents\Edit::class)->name('dashboard.agents.edit');
    Route::get('/dashboard/agents/{agent}', \App\Livewire\Dashboard\Agents\Show::class)->name('dashboard.agents.show');
});





// Route::get('/properties/{property}', Properties::class)->name('properties.show');

// Route::get('/properties', Properties::class)->name('properties');


use App\Http\Livewire\Properties\Index as PropertiesIndex;


// Test-assets
Route::get('/test-assets', function () {
    return view('test-assets');
});

// Test-content
Route::get('/test-content', function () {
    return view('test-content');
});




// routes components
Route::get('/', \App\Livewire\website\Homepage::class)->name('home');
Route::get('/about', \App\Livewire\website\About::class)->name('about');
Route::get('/contact', \App\Livewire\website\Contact::class)->name('contact');
Route::get('/services', \App\Livewire\website\Services::class)->name('services');



Route::get('/properties', \App\Livewire\website\Properties::class)->name('properties');

Route::get('/property/{property}', \App\Livewire\Website\OneProperty::class)->name('properties.show');


// Counter 
Route::get('/counter', \App\Livewire\website\Counter::class)->name('counter');



Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';

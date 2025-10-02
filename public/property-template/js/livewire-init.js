// public/property-template/js/livewire-init.js
function initializeTemplateJS() {
    // Reinitialize all template JavaScript plugins
    if (typeof tiny-slider !== 'undefined') {
        // Reinit sliders
    }
    if (typeof AOS !== 'undefined') {
        AOS.init(); // Reinit animations
    }
    // Add other plugin reinitializations here
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    initializeTemplateJS();
});

// Reinitialize after Livewire updates
document.addEventListener('livewire:init', function() {
    initializeTemplateJS();
});

document.addEventListener('livewire:update', function() {
    setTimeout(initializeTemplateJS, 100); // Wait a bit after update
});

document.addEventListener('livewire:navigate', function() {
    initializeTemplateJS();
});
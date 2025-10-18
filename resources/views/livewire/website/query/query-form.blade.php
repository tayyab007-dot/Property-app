<div class="bg-white colshadow-xl rounded-2xl p-8 sticky top-10 w-full mt-12 lg:mt-0 lg:col-span-4 space-y-8 ">
    {{-- <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Send Us a Message</h2> --}}

    @if (session('success'))
        <div class="p-3 mb-4 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-4">
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Name</label>
            <input type="text" wire:model="name" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
            @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
            <input type="email" wire:model="email" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
            @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Phone</label>
            <input type="text" wire:model="phone" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">WhatsApp</label>
            <input type="text" wire:model="whatsapp" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
            <textarea wire:model="message" rows="4" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            @error('message') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="w-full bg-indigo-600 text-white px-4 py-3 rounded-lg hover:bg-indigo-700 transition-colors font-semibold">
            Send Message
        </button>
    </form>
</div>

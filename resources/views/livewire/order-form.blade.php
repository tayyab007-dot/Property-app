{{-- <div class="bg-white shadow rounded p-4 mt-6">
    @if (session('success'))
        <div class="p-3 mb-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-3">
        <div>
            <label class="block text-sm font-semibold">Name</label>
            <input type="text" wire:model="name" class="w-full border rounded p-2">
            @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-semibold">Email</label>
            <input type="email" wire:model="email" class="w-full border rounded p-2">
            @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-semibold">Phone</label>
            <input type="text" wire:model="phone" class="w-full border rounded p-2">
        </div>

        <div>
            <label class="block text-sm font-semibold">Message</label>
            <textarea wire:model="message" class="w-full border rounded p-2"></textarea>
            @error('message') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Send Message
        </button>
    </form>
</div>
 --}}













 <div class="mt-12 lg:mt-0 lg:col-span-4 space-y-8">
                    <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8 sticky top-10">
 <div class="bg-white shadow-xl rounded-2xl p-8 sticky top-10 w-full">
    @if (session('success'))
        <div class="p-3 mb-4 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-4">
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Name</label>
            <input type="text" wire:model="name" class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
            @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
            <input type="email" wire:model="email" class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
            @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Phone</label>
            <input type="text" wire:model="phone" class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
            <textarea wire:model="message" rows="4" class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            @error('message') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="w-full bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors font-semibold">
            Send Message
        </button>

        {{-- <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Schedule a Tour</h2>
                        <form class="space-y-4">
                            <div>
                                <label for="tour-date"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Select
                                    Date</label>
                                <input type="date" id="tour-date"
                                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white sm:text-sm p-3">
                            </div>
                            <div>
                                <label for="tour-time"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Select
                                    Time</label>
                                <select id="tour-time"
                                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white sm:text-sm p-3">
                                    <option>9:00 AM</option>
                                    <option>10:00 AM</option>
                                    <option>11:00 AM</option>
                                    <option>1:00 PM</option>
                                    <option>2:00 PM</option>
                                    <option>3:00 PM</option>
                                    <option>4:00 PM</option>
                                </select>
                            </div>
                            <button type="submit"
                                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                                Schedule Tour
                            </button>
                        </form>
                    </div> --}}
    </form>
</div>
</div>
</div>
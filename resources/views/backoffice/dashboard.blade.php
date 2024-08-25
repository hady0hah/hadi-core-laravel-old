<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Dashboard Stats -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-blue-500 p-6 rounded-lg text-white">
                            <h3 class="text-lg">Total Users</h3>
                            <p class="text-2xl">150</p>
                        </div>
                        <div class="bg-green-500 p-6 rounded-lg text-white">
                            <h3 class="text-lg">Revenue</h3>
                            <p class="text-2xl">$12,500</p>
                        </div>
                        <!-- Add more widgets as needed -->
                    </div>

                    <!-- Other Content -->
                    <div class="mt-6">
                        <h4 class="text-lg font-semibold">Recent Activity</h4>
                        <ul>
                            <li>User John Doe registered.</li>
                            <li>Product XYZ was purchased.</li>
                            <!-- Add more recent activities -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

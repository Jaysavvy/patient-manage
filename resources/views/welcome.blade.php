<x-layout>
    <div class="p-10">
        <!-- Welcome Message -->
        <div class="mb-6">
            <h2 class="text-5xl font-bold">Welcome, Admin</h2>
            <p class="text-gray-400">Start your day with managing new appointments</p>
        </div>

        <!-- Cards Section -->
        <div>
            <h3 class="text-base font-semibold leading-6 text-gray-300">Last 30 days</h3>

            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Scheduled Appointments Card -->
                <div class="relative overflow-hidden rounded-lg bg-gray-800 px-6 pb-14 pt-7 shadow sm:px-8 sm:pt-8">
                    <dt class="flex items-center">
                        <div class="absolute top-6 left-6">
                            <img src="{{ Vite::asset('resources/assets/icons/calendar.svg') }}" class="h-14 w-14" />
                        </div>
                        <div class="ml-20 flex flex-col">
                            <p class="text-4xl font-semibold text-white">94</p>
                            <p class="flex items-baseline text-sm font-semibold text-green-600 mt-1">
                                <svg class="h-6 w-6 flex-shrink-0 self-center  viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                </svg>

                            </p>
                        </div>
                    </dt>
                    <dd class="absolute inset-x-0 bottom-0 bg-gray-800 px-6 py-5 sm:px-8">
                        <div class="text-sm text-white">
                            Total number of scheduled appointments
                        </div>
                    </dd>
                </div>

                <!-- Pending Appointments Card -->
                <div class="relative overflow-hidden rounded-lg bg-gray-800 px-6 pb-14 pt-7 shadow sm:px-8 sm:pt-8">
                    <dt class="flex items-center">
                        <div class="absolute top-6 left-6">
                            <img src="{{ Vite::asset('resources/assets/icons/pending.svg') }}" class="h-14 w-14" />
                        </div>
                        <div class="ml-20 flex flex-col">
                            <p class="text-4xl font-semibold text-white">32</p>
                            <p class="flex items-baseline text-sm font-semibold text-green-600 mt-1">


                            </p>
                        </div>
                    </dt>
                    <dd class="absolute inset-x-0 bottom-0 bg-gray-800 px-6 py-5 sm:px-8">
                        <div class="text-sm text-white">
                            Total number of pending appointments
                        </div>
                    </dd>
                </div>

                <!-- Cancelled Appointments Card -->
                <div class="relative overflow-hidden rounded-lg bg-gray-800 px-6 pb-14 pt-7 shadow sm:px-8 sm:pt-8">
                    <dt class="flex items-center">
                        <div class="absolute top-6 left-6">
                            <img src="{{ Vite::asset('resources/assets/icons/cancelled.svg') }}" class="h-14 w-14" />
                        </div>
                        <div class="ml-20 flex flex-col">
                            <p class="text-4xl font-semibold text-white">56</p>
                            <p class="flex items-baseline text-sm font-semibold text-red-600 mt-1">
                            </p>
                        </div>
                    </dt>
                    <dd class="absolute inset-x-0 bottom-0 bg-gray-800 px-6 py-5 sm:px-8">
                        <div class="text-sm text-white">
                            Total number of cancelled appointments
                        </div>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</x-layout>

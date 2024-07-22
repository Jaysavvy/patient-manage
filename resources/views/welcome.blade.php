<x-layout>
    <div class="p-10">
        <!-- Welcome Message -->
        <div class="mb-6">
            @php
                $name = 'Admin';
                $message = 'Start your day with managing new appointments';
            @endphp

            <x-message :name="$name" :message="$message" />
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

    <!-- Appointments Table -->
    <div class="bg-gray-900 py-10 px-10 w-12/12 ">
        <h2 class="px-4 text-base font-semibold leading-7 text-white sm:px-6 lg:px-8">Latest activity</h2>
        <table class="mt-6 w-full whitespace-nowrap text-left">
            <colgroup>
                <col class="w-full sm:w-4/12">
                <col class="lg:w-4/12">
                <col class="lg:w-2/12">
                <col class="lg:w-1/12">
                <col class="lg:w-1/12">
            </colgroup>
            <thead class="border-b border-white/10 text-sm leading-6 text-white">
                <tr>
                    <th scope="col" class="py-2 pl-4 pr-8 font-semibold sm:pl-6 lg:pl-8">Patient</th>
                    <th scope="col" class="hidden py-2 pl-0 pr-8 font-semibold sm:table-cell">Date</th>
                    <th scope="col" class="py-2 pl-0 pr-4 text-left font-semibold sm:pr-8 sm:text-left lg:pr-20">
                        Status</th>
                    <th scope="col" class="hidden py-2 pl-0 pr-8 font-semibold md:table-cell lg:pr-20">Doctor</th>
                    <th scope="col"
                        class="hidden py-2 pl-0 pr-4 text-right font-semibold sm:table-cell sm:pr-6 lg:pr-8">Actions
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white/5">
                <tr>
                    <td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
                        <div class="flex items-center gap-x-4">
                            <img src="{{ Vite::asset('resources/assets/images/Red-Gradient-Profile-Photo-Instagram-Post.png') }}"
                                alt="" class="h-8 w-8 rounded-full bg-gray-800">
                            <div class="truncate text-sm font-medium leading-6 text-white">Sara Baker</div>
                        </div>
                    </td>
                    <td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
                        <div class="flex gap-x-3">
                            <div class="font-mono text-sm leading-6 text-gray-400">Jan 4, 2022</div>
                        </div>
                    </td>
                    <td class="py-4 pl-0 pr-4 text-sm leading-6 sm:pr-8 lg:pr-20">
                        <div class="flex items-center gap-x-2">
                            <img src="{{ Vite::asset('resources/assets/icons/pending.svg') }}" alt="check"
                                class="h-5 w-5">
                            <span class="text-blue-300">Pending</span>
                        </div>
                    </td>
                    <td class="hidden py-4 pl-0 pr-8 text-sm leading-6 text-gray-400 md:table-cell lg:pr-20">
                        <div class="flex items-center gap-x-4">
                            <img src="{{ Vite::asset('resources/assets/images/dr-green.png') }}" alt=""
                                class="h-8 w-8 rounded-full bg-gray-800">
                            <div class="truncate text-sm font-medium leading-6 text-white">Dr. Alex Ramirez</div>
                        </div>
                    </td>
                    <td
                        class="hidden py-4 pl-0 pr-4 text-right text-sm leading-6 text-gray-400 sm:table-cell sm:pr-6 lg:pr-8">
                        <a href="#" class="text-green-600 hover:text-green-200">Schedule</a>
                        <a href="#" class="ml-4 text-red-600 hover:text-red-400">Cancel</a>
                    </td>
                </tr>
                <tr>
                    <td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
                        <div class="flex items-center gap-x-4">
                            <img src="{{ Vite::asset('resources/assets/images/Red-Gradient-Profile-Photo-Instagram-Post.png') }}"
                                alt="" class="h-8 w-8 rounded-full bg-gray-800">
                            <div class="truncate text-sm font-medium leading-6 text-white">Sara Baker</div>
                        </div>
                    </td>
                    <td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
                        <div class="flex gap-x-3">
                            <div class="font-mono text-sm leading-6 text-gray-400">Jan 4, 2022</div>
                        </div>
                    </td>
                    <td class="py-4 pl-0 pr-4 text-sm leading-6 sm:pr-8 lg:pr-20">
                        <div class="flex items-center gap-x-2">
                            <img src="{{ Vite::asset('resources/assets/icons/cancelled.svg') }}" alt="check"
                                class="h-5 w-5">
                            <span class="text-red-600">Cancelled</span>
                        </div>
                    </td>
                    <td class="hidden py-4 pl-0 pr-8 text-sm leading-6 text-gray-400 md:table-cell lg:pr-20">
                        <div class="flex items-center gap-x-4">
                            <img src="{{ Vite::asset('resources/assets/images/dr-green.png') }}" alt=""
                                class="h-8 w-8 rounded-full bg-gray-800">
                            <div class="truncate text-sm font-medium leading-6 text-white">Dr. Alex Ramirez</div>
                        </div>
                    </td>
                    <td
                        class="hidden py-4 pl-0 pr-4 text-right text-sm leading-6 text-gray-400 sm:table-cell sm:pr-6 lg:pr-8">
                        <a href="#" class="text-green-600 hover:text-green-200">Schedule</a>
                        <a href="#" class="ml-4 text-red-600 hover:text-red-400">Cancel</a>
                    </td>
                </tr>
                <tr>
                    <td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
                        <div class="flex items-center gap-x-4">
                            <img src="{{ Vite::asset('resources/assets/images/Red-Gradient-Profile-Photo-Instagram-Post.png') }}"
                                alt="" class="h-8 w-8 rounded-full bg-gray-800">
                            <div class="truncate text-sm font-medium leading-6 text-white">Sara Baker</div>
                        </div>
                    </td>
                    <td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
                        <div class="flex gap-x-3">
                            <div class="font-mono text-sm leading-6 text-gray-400">Jan 4, 2022</div>
                        </div>
                    </td>
                    <td class="py-4 pl-0 pr-4 text-sm leading-6 sm:pr-8 lg:pr-20">
                        <div class="flex items-center gap-x-2">
                            <img src="{{ Vite::asset('resources/assets/icons/check.svg') }}" alt="check"
                                class="h-5 w-5">
                            <span class="text-green-600">Scheduled</span>
                        </div>
                    </td>
                    <td class="hidden py-4 pl-0 pr-8 text-sm leading-6 text-gray-400 md:table-cell lg:pr-20">
                        <div class="flex items-center gap-x-4">
                            <img src="{{ Vite::asset('resources/assets/images/dr-green.png') }}" alt=""
                                class="h-8 w-8 rounded-full bg-gray-800">
                            <div class="truncate text-sm font-medium leading-6 text-white">Dr. Alex Ramirez</div>
                        </div>
                    </td>
                    <td
                        class="hidden py-4 pl-0 pr-4 text-right text-sm leading-6 text-gray-400 sm:table-cell sm:pr-6 lg:pr-8">
                        <a href="#" class="text-green-600 hover:text-green-200">Schedule</a>
                        <a href="#" class="ml-4 text-red-600 hover:text-red-400">Cancel</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr class="w-12/12 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
    </div>



</x-layout>

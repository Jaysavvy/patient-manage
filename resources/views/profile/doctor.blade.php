<x-layout>

    <div class="bg-gray-900 min-h-screen p-4">
        <div class="max-w-3xl mx-auto bg-gray-800 rounded-lg shadow-md overflow-hidden">
            <!-- Header Section -->
            <div class="p-6 flex flex-col items-center space-y-4">
                <img src="{{ $doctor->avatar }}" alt="Doctor's profile"
                    class="w-24 h-24 rounded-full border-4 border-purple-500">
                <div class="text-center">
                    <h1 class="text-3xl font-extrabold text-white">Dr. {{ $doctor->name }}</h1>
                    <p class="text-lg text-gray-300 font-semibold">{{ $doctor->specialty }}</p>
                    <p class="text-sm text-gray-400 flex items-center justify-center mt-1">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        West Palm Beach, FL 33445
                    </p>
                </div>
                <button
                    class="mt-4 bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg text-lg font-semibold">+
                    Follow</button>
            </div>

            <!-- Contact Information Section -->
            <div class="px-6 py-4 bg-gray-700 border-t border-b border-gray-600">
                <h2 class="text-lg font-bold text-gray-300 mb-3">Contact Information:</h2>
                <div class="grid grid-cols-2 gap-4 text-base">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10v7a2 2 0 002 2h14a2 2 0 002-2v-7l-8-4-8 4z"></path>
                        </svg>
                        <p class="text-gray-400"><span class="font-bold text-white">Phone:</span>
                            {{ $doctor->phone_number }}</p>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12.79V19a2 2 0 01-2 2H5a2 2 0 01-2-2v-6.21M7 10V7a5 5 0 0110 0v3"></path>
                        </svg>
                        <p class="text-gray-400"><span class="font-bold text-white">Email:</span>
                            {{-- {{ optional($doctor->users->first())->email ?? 'No email available' }} --}} doctor@baptist.com
                        </p>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3a1 1 0 011-1h6a1 1 0 011 1v4M8 7v10a4 4 0 004 4h0a4 4 0 004-4V7"></path>
                        </svg>
                        <p class="text-gray-400"><span class="font-bold text-white">Office:</span>
                            4800 Linton Blvd Suite F-107</p>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10v7a2 2 0 002 2h14a2 2 0 002-2v-7l-8-4-8 4z"></path>
                        </svg>
                        <p class="text-gray-400">{{ $doctor->city }}, {{ $doctor->state }} {{ $doctor->zip }}</p>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="flex justify-around px-6 py-4 bg-gray-700">
                <div class="text-center">
                    <span class="text-3xl font-extrabold text-white">440</span>
                    <p class="text-lg text-gray-400">Patients</p>
                </div>
                <div class="text-center">
                    <span class="text-3xl font-extrabold text-white">31</span>
                    <p class="text-lg text-gray-400">Years Experience</p>
                </div>
            </div>

            <!-- Core Skills Section -->
            <div class="px-6 py-4 bg-gray-800">
                <h2 class="text-lg font-bold text-gray-300 mb-2">My Core Skills:</h2>
                <div class="flex flex-wrap gap-2">
                    <div class="flex items-center bg-orange-500 text-white rounded-full px-3 py-1">
                        <span class="text-lg font-semibold mr-2">CARDIOLOGY</span>
                        <div class="flex">
                            <span class="text-white">★★★</span>
                        </div>
                    </div>
                    <div class="flex items-center bg-blue-500 text-white rounded-full px-3 py-1">
                        <span class="text-lg font-semibold mr-2">INTERNAL MEDICINE</span>
                        <div class="flex">
                            <span class="text-white">★★</span>
                        </div>
                    </div>
                    <div class="flex items-center bg-green-500 text-white rounded-full px-3 py-1">
                        <span class="text-lg font-semibold mr-2">ECHOCARDIOGRAPHY</span>
                        <div class="flex">
                            <span class="text-white">★</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Professional Bio Section -->
            <div class="px-6 py-4 grid grid-cols-3 gap-6 bg-gray-800">
                <div class="col-span-2">
                    <h2 class="text-lg font-bold text-gray-300 mb-2">Professional Bio</h2>
                    <p class="text-base text-gray-400 leading-relaxed">
                        {{ $doctor->bio }}
                    </p>
                </div>
                <div>
                    <h2 class="text-lg font-bold text-gray-300 mb-2">Where I Write</h2>
                    <ul class="space-y-2 text-base text-gray-400">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2a10 10 0 100 20 10 10 0 000-20z"></path>
                                <path d="M10 14l6-6"></path>
                                <path d="M6 10l4 4"></path>
                            </svg>
                            American Heart Journal
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2a10 10 0 100 20 10 10 0 000-20z"></path>
                                <path d="M10 14l6-6"></path>
                                <path d="M6 10l4 4"></path>
                            </svg>
                            Cardiology Today
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2a10 10 0 100 20 10 10 0 000-20z"></path>
                                <path d="M10 14l6-6"></path>
                                <path d="M6 10l4 4"></path>
                            </svg>
                            Hospital Blog
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Badges Section -->
            <div class="px-6 py-4 border-t border-gray-600 bg-gray-800">
                <h2 class="text-lg font-bold text-gray-300 mb-2">My Certifications (6)</h2>
                <div class="flex space-x-3">
                    <div
                        class="w-14 h-14 bg-blue-600 rounded-full flex items-center justify-center text-white text-base font-bold">
                        AHA</div>
                    <div
                        class="w-14 h-14 bg-red-600 rounded-full flex items-center justify-center text-white text-base font-bold">
                        ACC</div>
                    <div
                        class="w-14 h-14 bg-green-600 rounded-full flex items-center justify-center text-white text-base font-bold">
                        ASE</div>
                    <div
                        class="w-14 h-14 bg-yellow-600 rounded-full flex items-center justify-center text-white text-base font-bold">
                        ABIM</div>
                    <div
                        class="w-14 h-14 bg-purple-600 rounded-full flex items-center justify-center text-white text-base font-bold">
                        HRS</div>
                    <div
                        class="w-14 h-14 bg-indigo-600 rounded-full flex items-center justify-center text-white text-base font-bold">
                        SCAI</div>
                </div>
            </div>
        </div>
    </div>



</x-layout>

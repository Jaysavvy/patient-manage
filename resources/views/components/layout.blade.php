<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Layout</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-gray-900 text-white">
    <div>
        <nav class="flex justify-between items-center bg-black p-4">
            <!-- Logo and Title -->
            <div class="flex items-center px-10">
                <a href="/">
                    <img src="{{ Vite::asset('resources/assets/icons/logo-icon.svg') }}" alt="Logo"
                        class="h-8 w-8 mr-2">
                </a>
                <h1 class="text-white text-xl">Health Max Management</h1>
            </div>

            <!-- User Info -->
            <div x-data="{ open: false }" class="relative flex items-center space-x-4 px-10">
                <div>
                    <img src="{{ Vite::asset('resources/assets/images/admin.png') }}" alt="Image"
                        class="h-8 w-8 rounded-full cursor-pointer" @click="open = !open">
                </div>
                <div class="text-white cursor-pointer" @click="open = !open">
                    <a href="javascript:void(0)">Admin</a>
                    <span class="ml-2">▼</span>
                </div>

                <!-- Dropdown Menu -->
                <div x-show="open" @click.outside="open = false" x-transition
                    class="absolute right-0 mt-12 w-48 bg-gray-800 rounded-md shadow-lg py-1">
                    <a href="/profile" class="block px-4 py-2 text-gray-200 hover:bg-gray-700">Profile</a>
                    <a href="/logout" class="block px-4 py-2 text-gray-200 hover:bg-gray-700">Logout</a>
                </div>
            </div>
        </nav>
    </div>
</body>

<main>
    {{ $slot }}
</main>
</div>

</body>

</html>

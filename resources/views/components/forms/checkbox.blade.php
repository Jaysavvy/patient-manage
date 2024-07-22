@props(['label', 'name', 'options' => []])

<div class="mb-4">
    {{-- <span class="block text-sm font-medium mb-1">{{ $label }}</span> --}}
    <div class="space-y-4">
        @foreach ($options as $value => $option)
            <label class="flex items-center">
                <input type="checkbox" name="{{ $name }}[]" value="{{ $value }}"
                    class="form-checkbox h-6 w-6 text-green-500 transition duration-150 ease-in-out">
                <span class="ml-2 text-2xl text-gray-300">{{ $option }}</span>
            </label>
        @endforeach
    </div>
</div>

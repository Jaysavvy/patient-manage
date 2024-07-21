@props(['label', 'name', 'options' => []])


<span class="block text-sm font-medium mb-1">{{ $label }}</span>
<div class="flex items-center p-12 space-x-4">
    @foreach ($options as $value => $option)
        <label class="flex items-center">
            <input type="checkbox" name="{{ $name }}[]" value="{{ $value }}"
                class="form-radio h-4 w-4 text-blue-600 transition duration-150 ease-in-out">
            <span class="ml-2">{{ $option }}</span>
        </label>
    @endforeach
</div>

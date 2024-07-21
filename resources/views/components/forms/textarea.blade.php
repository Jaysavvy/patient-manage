@props(['label', 'name', 'id', 'placeholder' => '', 'value' => ''])


<label for="{{ $id }}" class="block text-sm font-medium mb-3">{{ $label }}</label>
<textarea id="{{ $id }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
    class="w-full p-12 bg-gray-900 text-white border border-gray-700 rounded">{{ $value }}</textarea>

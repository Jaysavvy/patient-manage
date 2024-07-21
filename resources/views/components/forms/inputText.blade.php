@props(['label', 'name', 'id', 'type' => '', 'placeholder' => '', 'value' => ''])


<label for="{{ $id }}" class="block text-sm font-medium mb-3">{{ $label }}</label>
<input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
    value="{{ $value }}" class="w-full p-4  bg-gray-900 text-white border border-gray-700 rounded">

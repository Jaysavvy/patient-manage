<form {{ $attributes(['class' => 'w-5xl mx-auto p-8 rounded-md space-y-6', 'method' => 'GET']) }}>
    @if ($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif

    {{ $slot }}
</form>

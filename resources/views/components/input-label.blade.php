@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm text-rose-900 font-semibold mb-1']) }}>
    {{ $value ?? $slot }}
</label>

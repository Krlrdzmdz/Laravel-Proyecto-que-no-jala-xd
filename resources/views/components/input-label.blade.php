@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-sm text-rose-800 ']) }}>
    {{ $value ?? $slot }}
</label>

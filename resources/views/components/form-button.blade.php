<x-form method="{{ $method }}" action="{{ $action }}">
    <div>
        <button type="submit" {{ $attributes }}>
            {{ $slot }}
        </button>
    </div>
</x-form>

<a
    {{ $attributes->merge([
        'class' => 'inline-flex items-center px-4 py-2 mt-4 mb-2 bg-amber-500
                    border border-transparent rounded-md font-semibold text-xs text-white
                    dark:text-gray-800 uppercase tracking-widest hover:bg-green-700
                    dark:hover:bg-amber-300',
    ]) }}>
    {{ $slot }}
</a>

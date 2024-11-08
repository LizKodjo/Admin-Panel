<a
    {{ $attributes->merge([
        'class' => 'float-right inline-flex
                        items-center px-4 py-2 bg-green-500 dark:bg-green-500/100 border
                        border-transparent rounded-md font-semibold text-xs text-white 
                        dark:text-gray-800 uppercase tracking-widest 
                        hover:bg-green-700',
    ]) }}>
    {{ $slot }}
</a>

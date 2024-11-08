<a
    {{ $attributes->merge([
        'class' => 'inline-flex items-center px-4 py-2 
            bg-red-600 dark:bg-rose-500 border border-transparent rounded-md font-semibold
            text-xs text-white dark:text-slate-800 uppercase tracking-widest hover:bg-red-700 
             dark:hover:bg-rose-400',
    ]) }}>
    {{ $slot }}
</a>

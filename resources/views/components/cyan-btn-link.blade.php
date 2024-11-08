<a
    {{ $attributes->merge([
        'class' => 'inline-flex items-center px-4 py-2 bg-cyan-800 dark:bg-cyan-400 
                border border-transparent rounded-md font-semibold text-xs text-white 
                dark:text-slate-800 uppercase tracking-widest hover:bg-cyan-700 
                dark:hover:bg-teal-400',
    ]) }}>
    {{ $slot }}
</a>

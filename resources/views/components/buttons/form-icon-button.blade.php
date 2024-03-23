<button {{ $attributes->merge(['class' => "flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5  text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:text-white focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray hover:bg-main dark:hover:text-white"])}}>
    {{ $icon }}
    {{ $text }}
</button>
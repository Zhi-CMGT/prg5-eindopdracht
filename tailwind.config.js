import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'cream-bg': '#FAF3E0',
                'dark-gray': '#333333',
                'warm-terracotta': '#E07B5D',
                'sky-blue': '#56CCF2',
                'sunset-orange': '#F2994A',
                'deep-jade-green': '#1F6F4B',
            },
        },
    },

    plugins: [forms],
};

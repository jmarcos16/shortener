import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Geist Sans'],
            },
        },
        colors: {
            primary: {
                light: '#09090B',
                // DEFAULT: '#09090B',
                dark: '#FAFAFA',
            },
            secondary: {
                light: '#B2F5EA',
                DEFAULT: '#81E6D9',
                dark: '#4FD1C5',
            },
        },
    },

    plugins: [forms],
};

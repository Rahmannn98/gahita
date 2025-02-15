import defaultTheme from 'tailwindcss/defaultTheme';
const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './resources/**/*.vue',
        './node_modules/flowbite/**/*.js'
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                slideInLeft: {
                    '0%': { transform: 'translateX(100%) scale(0.95)', opacity: '0' },
                    '100%': { transform: 'translateX(0) scale(1)', opacity: '1' },
                },
                slideInRight: {
                    '0%': { transform: 'translateX(-100%) scale(0.95)', opacity: '0' },
                    '100%': { transform: 'translateX(0) scale(1)', opacity: '1' },
                }
            },
            animation: {
                'slide-in-left': 'slideInLeft 2.5s ease-out',
                'slide-in-right': 'slideInRight 2.5s ease-out',
            },
        },
    },
    plugins: [require('flowbite/plugin')],
};

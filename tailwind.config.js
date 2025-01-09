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
                green: {
                    50: 'rgb(177, 189, 112)',
                    100: 'rgb(123, 136, 47)'
                },
                brown: {
                    50: 'rgb(250, 243, 224)', 
                    100: 'rgb(245, 224, 179)', 
                    200: 'rgb(224, 181, 135)', 
                    500: 'rgb(158, 125, 71)',  
                    700: 'rgb(109, 79, 41)',   
                    900: 'rgb(78, 58, 46)',    
                },
            },
        },
    },

    plugins: [forms],
};

const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    extend: {
        Image: {
          'fondo': "url('/public/images/1.jpeg')",
        },
    },

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                logo1: ['Almendra'],
                logo2: ['Aboreto']
            },
            
        },
    },


    plugins: [require('@tailwindcss/forms')],
};



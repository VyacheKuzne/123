import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                kalnia: ['Kalnia', ...defaultTheme.fontFamily.sans], // Добавляем шрифт "Kalnia"

            },
    
            colors: {
                // основные цвета
                'green': 'rgba(90, 128, 96, 1)',
                'gray': 'rgba(239, 239, 239, 1) ',
            },
          
        },
    },
    plugins: [],
};

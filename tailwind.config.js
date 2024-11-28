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
                poppins: ['poppins', 'sans-serif'],
            },
            colors: {
                primary: '#624DE3',
                textprimary: '#545454',
            },
            animation: {
                fadeInLeft: 'fadeInLeft 3s ease-out',
                fadeInRight: 'fadeInRight 3s ease-out',
            },
            keyframes: {
                fadeInLeft: {
                    '0%': { opacity: '0', transform: 'translateX(-100px)' },
                    '100%': { opacity: '1', transform: 'translateX(0)' },
                },
                fadeInRight: {
                    '0%': { opacity: '0', transform: 'translateX(100px)' },
                    '100%': { opacity: '1', transform: 'translateX(0)' },
                },
            },
            boxShadow: {
        'hover-timbul': '0 10px 15px rgba(0, 0, 0, 0.2)',
      },
        },
    },
    plugins: [],
};

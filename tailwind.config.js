import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors:{
                noble: {
                    100: "#E8E9E9",
                    200: "#CDCECF",
                    300: "#9B9C9E",
                    400: "#686B6E",
                    500: "#363A3D",
                    600: "#1A1D21",
                    700: "#131619",
                    800: "#0D0F10",
                    900: "#060708"
                }
            },
        },
    },

    plugins: [],
};

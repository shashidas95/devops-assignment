/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                'top-color': '#8e4d57',
                'heading': '#fcfbfc',
            }
        },
    },
    plugins: [],
}



/** @type {import('tailwindcss').Config} */
const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    main: '#d8572a',
                    100: '#F4D0C3',
                    200: '#EEB8A5',
                    300: '#E9A186',
                    400: '#E38968',
                    500: '#DE714A',
                    600: '#D8572A',
                    700: '#A5421E',
                    800: '#6E2C14',
                    900: '#37160A',
                },
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin')
    ],
}


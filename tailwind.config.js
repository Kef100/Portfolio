const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        minHeight: {
            'screen': '100vh',
            'full': '100%',
            'auto': 'auto',
            '0': '0px',
            'min': 'min-content',
            'max': 'max-content',
            'fit': 'fit-content',
            '1/2': '50vh',
            '3/4': '75vh',
        },
        maxHeight: {
            'screen': '100vh',
            'full': '100%',
            'auto': 'auto',
            '0': '0px',
            'min': 'min-content',
            'max': 'max-content',
            'fit': 'fit-content',
            '1/2': '50vh',
            '3/4': '75vh',
        },
        screens: {
            'mobile-sm': {'min': '320px'},
            // => @media (min-width: 320px) { ... }

            'mobile-md': {'min': '375px'},
            // => @media (min-width: 375px) { ... }

            'mobile-lg': {'min': '425px'},
            // => @media (min-width: 425px) { ... }

            'tablet': {'min': '768px'},
            // => @media (min-width: 768px) { ... }

            'laptop': {'min': '1440px'},
            // => @media (min-width: 1024px) { ... }

            'desktop': {'min': '1920px'},
            // => @media (min-width: 2560px) { ... }
        },
        extend: {
            backgroundSize: {
                'auto': 'auto',
                'cover': 'cover',
                'contain': 'contain',
                'full': '100% 100%',
            },
            transitionTimingFunction: {
                'in-expo': 'cubic-bezier(0.175, 0.885, 0.32, 1.275)',
            },
            backgroundImage: {
                'landing': "url('/assets/files/images/landing/background.jpg')",
                'about': "url('/assets/files/images/landing/about.jpg')",
                'circle': "url('/assets/files/images/symbols/Circle.svg')",
                'triangle': "url('/assets/files/images/symbols/triangle.svg')",
                'cross': "url('/assets/files/images/symbols/X.svg')",
            },
            width: {
                '20': '4rem',
            },
            colors: {
                'primary': {
                    DEFAULT: '#857852',
                    '50': '#D5CEBA',
                    '100': '#CDC5AD',
                    '200': '#BDB394',
                    '300': '#AEA17B',
                    '400': '#9E8F62',
                    '500': '#857852',
                    '600': '#62593D',
                    '700': '#403927',
                    '800': '#1D1A12',
                    '900': '#000000'
                },
                'secondary': {
                    DEFAULT: '#222222',
                    '50': '#7E7E7E',
                    '100': '#747474',
                    '200': '#5F5F5F',
                    '300': '#4B4B4B',
                    '400': '#363636',
                    '500': '#222222',
                    '600': '#181818',
                    '700': '#111111',
                    '800': '#060606',
                    '900': '#000000'
                },
                'accent': {
                    DEFAULT: '#444444',
                    '50': '#A0A0A0',
                    '100': '#969696',
                    '200': '#818181',
                    '300': '#6D6D6D',
                    '400': '#585858',
                    '500': '#444444',
                    '600': '#282828',
                    '700': '#0C0C0C',
                    '800': '#000000',
                    '900': '#000000'
                },
            },
        },
        plugins: [],
    },
}

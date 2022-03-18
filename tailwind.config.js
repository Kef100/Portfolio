const colors = require('tailwindcss/colors')

module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
      container: {
      maxWidth: "95%",
      margin: "0 auto",
  },
    extend: {
        transitionTimingFunction: {
            'in-expo': 'cubic-bezier(0.175, 0.885, 0.32, 1.275)',
        },
        backgroundImage: {
            'landing': "url('/assets/files/images/landing/background.jpg')",
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
                '600': '#060606',
                '700': '#000000',
                '800': '#000000',
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
  },
  plugins: [],
}

/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      lime: colors.lime,
      green: colors.green, 
      amber: colors.amber,
      emerald: colors.emerald,
      blue: '#99d4e4',
      indigo: colors.indigo,
      yellow: colors.yellow,
      green: {
        50: '#b6edb4',
        100: '#a2e99f',
        200: '#8ee48b',
        300: '#7adf76',
        400: '#66da61',
        500: '#bfa094',
        600: '#52d54d',
        700: '#3ed138',
        800: '#33c32d',
        900: '#2dae28',
      },
    }
  }, 
  },
    plugins: [],
}


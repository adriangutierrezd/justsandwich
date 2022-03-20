const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
    '*.php',
    'includes/*.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    colors:{
      rose: colors.rose,
      amber: colors.amber,
      indigo: colors.indigo,
      gray: colors.coolGray,
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

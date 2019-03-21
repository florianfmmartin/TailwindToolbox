const defaultTheme = require('tailwindcss/defaultTheme')


module.exports = {
  theme: {
    // Some useful comment
    colors: {
      ...defaultTheme.colors,
      'brand': '#3b7977',
      'brand-alt': '#57a99a',
      'brand-ondark': '#6ccec6',
      'brand-white': '#ecf4f3',
    },
    heights: {
      ...defaultTheme.heights,
      '128': '20rem',
      'half': '50vh',
      '3/4': '75vh'
    },





  },
  variants: {
    // Some useful comment
  },
  plugins: [
    // Some useful comment
  ]
}

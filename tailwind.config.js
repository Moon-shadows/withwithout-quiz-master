const plugin = require('tailwindcss/plugin')

module.exports = {
  corePlugins: {
    container: false
  },

  content: [
    './resources/js/**/*.{vue, js, ts, jsx, tsx}',
    './resources/views/**/*.php'
  ],

  safelist: ["bg-green"],  //Tailwind raderar allt som ej används.


  theme: {
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1440px'
    },

    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      white: '#fff',
      black: '#000',
      red: '#881337',
      mörkblå: '#000064',  
      ljusblå: '#7678ED',
      green: '#00FFC4',
      gray: '#EEEEEE',
      darkblue: '#202E55'
      },

    fontFamily: {
      poppins: ["Poppins", 'sans-serif'],
    },

    fontSize: {
      14: '0,875 rem',
      16: '1rem',
      20: '1.25rem',
      32: '2rem',
      48: '3rem'
    },

    extend: {
      // ..
    }
  },
  plugins: [
    // ..
  ]
}

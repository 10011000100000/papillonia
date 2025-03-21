/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/css/app.css"
  ],
  theme: {
    extend: {
      colors: {
        'purple' : '#6E1F55',
        'dark-purple' : '#4F163D',
        'light-purple' : '#B80B82',
        'green' : '#42990A',
        'light-green' : '#5AB422',
        'blue' : '#0284C7',
        'light-blue' : '#0EA5E9',
        'red' : '#FF0000',
        'grey' : '#7A7A7A',
        'dark-grey' : '#242424',
        'ocean-blue' : '#4C5BA1',
        'orange' : '#CF5909',
      },
      screens: {
        'bp' : '775px',
        'header-phone' : '900px',
        'header-email' : '700px',
        'header-buy_book' : '500px',
        'bundles-buttons>bp' : '1130px',
        'bundles-buttons<bp' : '580px',
      },
    },
    fontFamily: {
      'source-sans-3': '"Source Sans 3", sans-serif',
      'playfair-display': '"Playfair Display", serif',
    }
  },
  plugins: [],
}


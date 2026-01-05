/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "./partials/**/*.php",
    "./assets/js/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'dark': {
          '900': '#060608',
          '800': '#0b0b10',
          '700': '#151520',
        },
        'gold': {
          'light': '#d4b17a',
          'DEFAULT': '#cfa66a',
          'dark': '#b8945f',
        }
      },
      fontFamily: {
        'heading': ['Cormorant Garamond', 'serif'],
        'body': ['Inter', 'sans-serif'],
      },
      backgroundImage: {
        'gradient-dark': 'linear-gradient(to bottom, rgba(6, 6, 8, 0.7) 0%, rgba(6, 6, 8, 0.85) 50%, rgba(6, 6, 8, 0.95) 100%)',
        'gradient-gold': 'linear-gradient(135deg, rgba(212, 177, 122, 0.1) 0%, rgba(207, 166, 106, 0.15) 100%)',
      },
    },
  },
  plugins: [],
}


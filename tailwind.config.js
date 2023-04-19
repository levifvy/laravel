/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'sea-sky': 'linear-gradient(to right, lightblue, lightgreen, lightviolet)'
    },
  },
  plugins: [],
}
}
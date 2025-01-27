{import('tailwindcss').Config} 
module.exports = {
  content: ["{html,js}"],
  darkMode: 'media',
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin'),
  ],
};
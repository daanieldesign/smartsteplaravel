/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php", // pokud používáte Blade šablony
    "./resources/js/**/*.js",           // pokud máte JS soubory v resources/js
    "./resources/css/**/*.css",         // pokud máte CSS soubory v resources/css
    "./resources/**/*.vue",             // pokud používáte Vue komponenty
    "./resources/**/*.jsx",             // pokud používáte React
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
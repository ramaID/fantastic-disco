/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "vendor/livewire/livewire/src/views/pagination/tailwind.blade.php",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

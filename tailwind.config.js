/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "/resource/**/*.blade.php",
    "/resource/**/*.js",
    "/resource/**/*.vue"
  ],
  theme: {
    extend: {
      backgroundImage: {
        'image-home' : "url('image/savana-hotel.png')"
      },
    },
  },
  plugins: [],
}


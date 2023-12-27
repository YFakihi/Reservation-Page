/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js,php}"],
  theme: {
    extend: {
      backgroundImage: {
        'hero-pattern': "url('/img/bg.png')",
        // 'footer-texture': "url('/img/footer-texture.png')",
      }
    },
  },
  plugins: [],
}


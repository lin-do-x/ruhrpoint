/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./dist/**/*.{php,html,js}",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('tailwind-scrollbar')({ preferredStrategy: 'pseudoelements' }),
    require('flowbite/plugin')
  ]
}
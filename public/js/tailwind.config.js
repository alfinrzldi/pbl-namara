/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["index.html" ,"./node_modules/flowbite/**/*.js" ], 
  theme: {
    extend: {
      poppins :["Poppins"]
    },
    colors: {
        clifford: "#da373d",
        pinknamara: "#fcc4ac",
        headline: "#00473e",
        buttontext: "#00473e",
        button: "#faae2b",
        secondary: "#ffa8ba",
      },
  },
  plugins: [require('flowbite/plugin')]
};


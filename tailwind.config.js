/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**.{php,html,js}","./template-parts/*.{php,html,js}","./blocks/*/**.{php,html,js}"],
  theme: {
    extend: {
      screens: {
        'tablet': "1150px",
      },
      fontFamily: {
        'Monserrat': ['Monserrat','sans-serif']
      },

      colors: {
        "primary": "#552084",
        "secondary": "#FDBA21", 
      },
      height: {
 

      },
      fontSize: {
      },
      maxWidth:{
      }
    },
  },
  plugins: []
};

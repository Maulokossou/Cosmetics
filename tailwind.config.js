/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
       "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/tw-elements/js/**/*.js"
    ],
    theme: {
      extend: {
        colors:{
            primary:{
                one:"#c73016",
                two:"#e9b59e",
                three: "#fbe4ca",
            }
        }
      },
    },
    darkMode: "class",
    plugins: [require("tw-elements/plugin.cjs")]
  }


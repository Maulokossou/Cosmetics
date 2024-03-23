import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/tw-elements/js/**/*.js",
        "./public/assets/js/main.js",
        "./public/assets/vendor/select2/dist/js/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    one: "#c73016",
                    two: "#e9b59e",
                    three: "#fbe4ca",
                },
                main: {
                    100: "#01A8B6",
                    200: "#008080",
                },
                secondary: {
                    100: "#787878",
                    200: "#606060",
                },
            },
        },
    },

    plugins: [forms, require("tw-elements/plugin.cjs"), require('@tailwindcss/typography'),],
};

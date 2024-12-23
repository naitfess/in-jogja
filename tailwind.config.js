import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#FB7E00", // Warna utama (orange)
                secondary: "#FF8C42", // Warna sekunder
                accent: "#FF6F42", // Warna aksen
                neutral: "#F5F5F5", // Background netral
                white: "#FFFFFF", // Putih
                black: "#000000", // Hitam
            },
        },
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: ["bumblebee"],
    },
};

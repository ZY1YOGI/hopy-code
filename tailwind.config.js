/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/views/**/*.blade.php',
        './resources/views/components/*.blade.php',
        './storage/framework/views/*.php',
    ],
    theme: {
        extend: {
            colors: {
                body: {
                    light: "#E4E9F7",
                    dark: "#0e1422",
                },
                primary: "#20968e"
            },
            fontFamily: {
                sans: ["Poppins", "sans-serif"],
            },
        },
    },
    plugins: [],
}


/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#FF81BD",
                secondary: "#221FBA",
            },
            screens: {
                "tab": "981px"
            }
        },
        plugins: [],
    }
}

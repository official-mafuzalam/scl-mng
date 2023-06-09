/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
    ],
    darkMode: 'class',
    theme: {
        container: {
            center: true,
        },
        extend: {},
    },
    plugins: [require("preline/plugin")],
};

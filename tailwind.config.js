const colors = require("tailwindcss/colors");

module.exports = {
    mode: "jit",

    content: ["./resources/views/**/*.blade.php"],

    theme: {
        extend: {
            colors: {
                primary: {
                    50: "#fef8ed",
                    100: "#f8edd2",
                    150: "#f5e3c2",
                    200: "#f0dba6",
                    300: "#e9c979",
                    400: "#e1b74d",
                    500: "#daa520",
                    DEFAULT: "#daa520",
                    600: "#ae841a",
                    700: "#836313",
                    800: "#57420d",
                    900: "#2c2106",
                },
            },
        },
    },
};

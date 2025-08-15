import defaultTheme from "tailwindcss/defaultTheme";

// Palette principale (brand = vert), accent (orange clair / kaki) conformément au brief
// #00BD61 (brand 600) et #EFA453 (accent 500)
export default {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brand: {
                    50: "#ECFDF4",
                    100: "#D1FAE5",
                    200: "#A7F3D0",
                    300: "#6EE7B7",
                    400: "#34D399",
                    500: "#10C977",
                    600: "#00BD61", // Couleur pivot
                    700: "#05965A",
                    800: "#04724A",
                    900: "#065F3D",
                },
                accent: {
                    50: "#FFF7ED",
                    100: "#FFEDD5",
                    200: "#FED7AA",
                    300: "#FDBA74",
                    400: "#FB923C",
                    500: "#EFA453", // demandée
                    600: "#D97706",
                    700: "#B45309",
                    800: "#92400E",
                    900: "#78350F",
                },
            },
            boxShadow: {
                soft: "0 4px 16px -4px rgba(0,0,0,0.08), 0 2px 4px -1px rgba(0,0,0,0.04)",
            },
            backgroundImage: {
                "grid-soft":
                    "linear-gradient(to right, rgba(0,0,0,0.04) 1px, transparent 1px), linear-gradient(to bottom, rgba(0,0,0,0.04) 1px, transparent 1px)",
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};

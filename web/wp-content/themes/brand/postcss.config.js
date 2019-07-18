const purgecss = require('@fullhuman/postcss-purgecss');

module.exports = {
    plugins: [
        require("postcss-import"),
        require('tailwindcss'),
        purgecss({
            content: ["./templates/*.php"]
        }),
        require("postcss-preset-env")({stage: 1}),
        require("autoprefixer"),
        require("cssnano")
    ]
};

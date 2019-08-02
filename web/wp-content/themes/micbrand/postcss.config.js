const purgecss = require("@fullhuman/postcss-purgecss");

module.exports = {
	plugins: [
		require("postcss-import"),
		require("tailwindcss"),
		//* purgecss is commented out to have full access to Tailwind's CSS
		//TODO: uncomment purgecss for final build
		// purgecss({
		// 	content: ["./**/*.php"]
		// }),
		require("postcss-preset-env")({ stage: 1 }),
		require("autoprefixer")
		// require("cssnano")
		//TODO: uncomment cssnano for final build
	]
};

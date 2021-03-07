const mix = require("laravel-mix");

mix.setPublicPath("assets");
mix.browserSync("kirby.local");

mix
  .js("src/js/main.js", "assets/js")
  .sass("src/scss/main.scss", "assets/css")
  .options({
    autoprefixer: {
      browserlist: ["last 2 versions"],
    },
  })
  .extract()
  .version();
